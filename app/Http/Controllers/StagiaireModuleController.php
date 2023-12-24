<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Stagiaire;
use App\Models\StagiaireModule;
use App\Http\Requests\StoreStagiaireModuleRequest;
use App\Http\Requests\UpdateStagiaireModuleRequest;

class StagiaireModuleController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('notes.index', [
      'notes' => StagiaireModule::paginate(10)
      , 'stagiaires' => Stagiaire::all()
      , 'modules' => Module::all()
    ]);
  }

  public function moyenne($id)
  {
    return view('notes.moyenne', [
      'stagiaire' => Stagiaire::findOrfail($id)]);
  }

  public function store(StoreStagiaireModuleRequest $request)
  {
    StagiaireModule::create($request->validated());
    return redirect()->route('notes.index');
  }

  public function update(UpdateStagiaireModuleRequest $request)
  {
    StagiaireModule::findOrfail($request->id)->update($request->validated());
    return redirect()->route('notes.index');
  }

  public function destroy(StagiaireModule $stagiaireModule)
  {
    $stagiaireModule->delete();
    return redirect()->route('notes.index');
  }
}
