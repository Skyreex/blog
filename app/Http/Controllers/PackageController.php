<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    static function getData()
    {
        return [
            ['id' => 1, 'title' => 'Spatie', 'slug' => 'spatie'],
            ['id' => 2, 'title' => 'No Captcha', 'slug' => 'no-captcha'],
            ['id' => 3, 'title' => 'SEOTools', 'slug' => 'seotools']
        ];
    }

    public function index()
    {
        return view('pages.packages.index', ['packages' => static::getData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($package)
    {
        $data = static::getData();
        $index = array_search($package, array_column($data, 'id'));
        return $index !== false ? view('pages.packages.show', ['pkg' => $data[$index]]) : abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
