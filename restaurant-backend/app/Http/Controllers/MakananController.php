<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Makanan;
use App\Http\Requests\StoreMakananRequest;
use App\Http\Requests\UpdateMakananRequest;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuItems = Makanan::all();
        return response()->json($menuItems);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMakananRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMakananRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function show(Makanan $makanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Makanan $makanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMakananRequest  $request
     * @param  \App\Models\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMakananRequest $request, Makanan $makanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Makanan $makanan)
    {
        //
    }
}
