<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Vente;
use App\Models\Stock;
use Illuminate\Http\Request;

class VenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventes = Vente::with('stock')->get();
        return view('vente.index',compact('ventes'));
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
        //$id_stock= stock::find()
        $vente= Vente::create([
                'stock_id'=>$request->stock_id,
                'user_id'=>Auth::user()->id,
                'prix_vente'=>$request->prixunitaire,
                'quantite_vendu'=>$request->quantite,
                'nom_client'=>$request->nom_client,
                'description'=>$request->description
        ]);
        return redirect()->back()->with('success','Vente enregistrée avec succés');
            }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
          // Trouver l'élément par son ID
      $stock = Stock::find($id)->first();
      // Vérifier si l'élément existe
      if ($stock) {
          return view('vente.add',compact('stock'));
      } else {
          return 'Not found an error occured';
      }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vente $vente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vente $vente)
    {
        //
    }
}
