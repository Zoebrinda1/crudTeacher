<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnseignantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware'=>'auth'], function(){
    Route::get('/', function () {
        return view('welcome');
    })->name("acceuil");
    
    Route::get("/enseignant", [EnseignantController::class, "index"])->name("enseignant");
    Route::get("/enseignant/create", [EnseignantController::class, "create"])->name("enseignant.create");
    
    Route::get("/enseignant/{enseignant}", [EnseignantController::class, "edit"])->name("enseignant.edit");
    
    Route::post("/enseignant/create", [EnseignantController::class, "store"])->name("enseignant.ajouter");
    
    Route::delete("/enseignant/{enseignant}", [EnseignantController::class, "delete"])->name("enseignant.supprimer");
    
    Route::put("/enseignant/{enseignant}", [EnseignantController::class, "update"])->name("enseignant.update");
    

});
