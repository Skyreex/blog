<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('bmi')->only('calculateBMI');
        $this->middleware('mensualite')->only('mensualite');
        $this->middleware('convertisseur')->only('convertisseur');
    }

    function calculateBMI(Request $rqst)
    {
        $fullname = "{$rqst->input('fname')} {$rqst->input('lname')}";
        $height = $rqst->input('height') / 100;
        $weight = $rqst->input('weight');
        $gender = $rqst->input('gender');
        $bmi = $weight / ($height ** 2);
        $bmi = number_format((float) $bmi, 2, '.', '');
        $greeting = $gender ? "Mister" : "Miss";
        $output = "Hey {$greeting} {$fullname}! Your BMI is {$bmi} which suggests you are ";
        if ($bmi < 18.5) {
            $output .= "underweight";
            $alert = "from-red-700 to-red-500";
        } elseif ($bmi >= 18.5 && $bmi < 25) {
            $output .= "normal";
            $alert = "from-lime-800 to-green-800";
        } elseif ($bmi >= 25 && $bmi < 30) {
            $output .= "overweight";
            $alert = "from-yellow-600 to-yellow-800";
        } elseif ($bmi >= 30) {
            $output .= "obese";
            $alert = "from-red-700 to-red-500";
        } else {
            $output = "Error";
            $alert = "from-red-700 to-red-500";
        }
        // dd(2);
        return redirect()->back()->with(["output" => $output, "alert" => $alert])->withInput();
    }

    function convertisseur(Request $request)
    {
        $nom = $request->input('nom');
        $montant = $request->input('montant');
        $devise = $request->input('devise');
        $output = "$nom, le montant de $montant $devise vaut ";
        match ($devise) {
            "Dollar Américain" => $output .= number_format($montant * 10.3, 2, ".", " ") . " MAD.",
            "Dollar canadien" => $output .= number_format($montant * 7.6, 2, ".", " ") . " MAD.",
            "Euro" => $output .= number_format($montant * 10.9, 2, ".", " ") . " MAD.",
            "Livre sterling" => $output .= number_format($montant * 12.5, 2, ".", " ") . " MAD.",
            default => $output = "Error"
        };
        return redirect()->route('convertisseur.index')->with("output", $output)->withInput();
    }

    function mensualite(Request $request)
    {
        $m_pret = $request->input('m_pret');
        $taux = $request->input('taux') / 1200;
        $duree = $request->input('duree');
        $mensualite = ($m_pret * $taux) / (1 - (1 + $taux) ** -$duree);
        $output = "La mensualité est " . number_format($mensualite, 2, ".", "");
        if ($mensualite <= 1000)
            $alert = "from-lime-800 to-green-800";
        elseif ($mensualite > 1000 && $mensualite <= 2000)
            $alert = "from-yellow-600 to-yellow-800";
        elseif ($mensualite > 2000)
            $alert = "from-red-700 to-red-500";
        else {
            $output = "Error";
            $alert = "from-red-700 to-red-500";
        }
        return redirect()->route('mensualite.index')->with(["output" => $output, "alert" => $alert])->withInput();
    }
}
