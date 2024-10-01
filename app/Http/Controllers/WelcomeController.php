<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Stock;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $stocks = Stock::latest()->get();
        return view('index.index',compact('stocks'));
    }
    public function augmenter($id)
    {

         // Trouver l'élément par son ID
         $stock = Stock::find($id)->first();
        // dd($stocks);
         // Vérifier si l'élément existe
         if ($stock) {
             return view('stock.augmenter',compact('stock'));
         } else {
             return 'Not found an error occured';
         }
    }
    
    public function show($id)
    {
      // Trouver l'élément par son ID
      $stock = Stock::find($id)->first();
      // Vérifier si l'élément existe
      if ($stock) {
          return view('stock.update',compact('stock'));
      } else {
          return 'Not found an error occured';
      }
    }

}
