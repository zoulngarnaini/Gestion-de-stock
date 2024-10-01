<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use  App\Http\Controllers\FactureController;
use  App\Http\Controllers\InventaireController;
use  App\Http\Controllers\StockController;
use  App\Http\Controllers\VenteController;

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('index');
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('accueil');
Route::get('/augmenter/{id}', [App\Http\Controllers\WelcomeController::class, 'augmenter'])->name('addStock');
Route::get('/update/{id}', [App\Http\Controllers\WelcomeController::class, 'show'])->name('masStock');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('stock',\App\Http\Controllers\StockController::class);
Route::resource('vente',\App\Http\Controllers\VenteController::class);
Route::resource('facture',\App\Http\Controllers\FactureController::class);
Route::resource('commande',\App\Http\Controllers\CommandeController::class);
Route::resource('inventaire',\App\Http\Controllers\inventaireController::class);
Route::resource('Caisse',\App\Http\Controllers\CaisseController::class);
Route::resource('Gestion',\App\Http\Controllers\GestionController::class);

Route::get('/recu', [App\Http\Controllers\CaisseController::class, 'afficher_recu'])->name('home_recu');



Route::middleware('auth')->group(function () {

});
