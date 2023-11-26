<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("articles")->insert([
            [
                "description" => "Article 1",
                "poids" => 200,
                "couleur" => "Vert",
                "prix_achat" => 100.5,
                "fournisseur_id" => 2,
            ],
            [
                "description" => "Article 2",
                "poids" => 300,
                "couleur" => "Vert",
                "prix_achat" => 150.3,
                "fournisseur_id" => 3,
            ],
            [
                "description" => "Article 3",
                "poids" => 300,
                "couleur" => "Blue",
                "prix_achat" => 200.5,
                "fournisseur_id" => 2,
            ],
            [
                "description" => "Article 4",
                "poids" => 500,
                "couleur" => "Blue",
                "prix_achat" => 130,
                "fournisseur_id" => 2,
            ],
            [
                "description" => "Article 5",
                "poids" => 550,
                "couleur" => "Vert",
                "prix_achat" => 70,
                "fournisseur_id" => 1,
            ],
        ]);
    }
}
