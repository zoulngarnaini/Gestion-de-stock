<?php

namespace App\Http\Controllers;

use App\Models\inventaire;
use App\Models\Stock;
use Illuminate\Http\Request;

class InventaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stocks = Stock::latest()->get();
        return view('Inventaire.index', compact('stocks'));
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
    public function show(inventaire $inventaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(inventaire $inventaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, inventaire $inventaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(inventaire $inventaire)
    {
        //
    }
}
