<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use App\Http\Requests\StoreStagiaireRequest;
use App\Http\Requests\UpdateStagiaireRequest;

class StagiaireController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('stagiaires.index', [
      'stagiaires' => Stagiaire::paginate(5)
    ]);
  }

  public function store(StoreStagiaireRequest $request)
  {
    Stagiaire::create($request->validated());
    return redirect()->route('stagiaires.index');
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateStagiaireRequest $request)
  {
    Stagiaire::findOrfail($request->id)->update($request->validated());
    return redirect()->route('stagiaires.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Stagiaire $stagiaire)
  {
    $stagiaire->delete();
    return redirect()->route('stagiaires.index');
  }
}
