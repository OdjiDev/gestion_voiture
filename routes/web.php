<?php

use Illuminate\Support\Facades\Route;
Use \App\Http\Controllers\VoitureController;
Use \App\Http\Controllers\FormulaireController;
Route::get('/', function () {
    return view('welcome');
});
// routes/web.php


Route::get('/formulaire', function () {
    return view('formulaire');
})->name('formulaire'); // ← Le nom est important


Route::get('location/formulaire', function () {
    return view('formulaire');
})->name('formulaire'); // ← Le nom est important

Route::post('/traiter-formulaire', [FormulaireController::class, 'traiter'])
     ->name('formulaire.traiter'); // Nom de la route

     Route::resource('voitures', VoitureController::class);