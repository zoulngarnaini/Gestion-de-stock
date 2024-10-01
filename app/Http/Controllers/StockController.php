<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stocks = stock::latest()->get();
       // dd($stocks);
        return view('stock.index',compact('stocks'));
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
        if($request->action=='insert'){
        $stock = Stock::where("reference","=",$request->reference)->where("designation","=",$request->designation)->first();
        if($stock){
            //dd($stock);
            $stocks = Stock::find($stock->id);
            $stocks->update([
                'user_id'=>Auth::user()->id,
                'prix_achat'=>$request->prixunitaire,
                'quantite'=>$stock->quantite+$request->quantite,
                'zone_critique'=>$request->zone_critique,
                'image'=>$request->imagestock
    
            ]);
            return redirect()->back()->with('success','Mise a jour  reussie avec succés');

        }else{
        $sotck = Stock::create([
            'reference'=>$request->reference,
            'user_id'=>Auth::user()->id,
            'designation'=>$request->designation,
            'prix_achat'=>$request->prixunitaire,
            'quantite'=>$request->quantite,
            'zone_critique'=>$request->zone_critique,
            'image'=>$request->imagestock

        ]);
        return redirect()->back()->with('success','Enregistrement reussi avec succés');

    }
    }
    elseif($request->action=='update'){
        $stock = Stock::find($request->id);
        $stock->update([
            'quantite'=>$request->quantite+$request->quantiteajouter
        ]);
        return redirect()->back()->with('success','Ajout de la quantite reussie avec succés');
    }
    elseif($request->action=='update_complet'){
        $stock = Stock::find($request->id);
        $stock->update([
            'reference'=>$request->reference,
            'user_id'=>Auth::user()->id,
            'designation'=>$request->designation,
            'prix_achat'=>$request->prixunitaire,
            'quantite'=>$request->quantite,
            'zone_critique'=>$request->zone_critique,
            'image'=>$request->imagestock

        ]);
        return redirect()->back()->with('success','Modification  reussie avec succés');

    }
    return redirect()->back()->with('success','Aucune operation trouvee');
    }

    /**
     * Display the specified resource.
     */
    public function show($id,$actions)
    {
        $stocks = Stock::find($id)->first();
        return view('layouts.modals',$stocks,$actions);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stock $stock)
    {
        //
    }
}
