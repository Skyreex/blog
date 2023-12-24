<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Http\Requests\StoreModuleRequest;
use App\Http\Requests\UpdateModuleRequest;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('modules.index', [
            'modules' => Module::paginate(5)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreModuleRequest $request)
    {
        Module::create($request->validated());
        return redirect()->route('modules.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateModuleRequest $request)
    {
        Module::findOrfail($request->id)->update($request->validated());
        return redirect()->route('modules.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Module $module)
    {
        $module->delete();
        return redirect()->route('modules.index');
    }
}
