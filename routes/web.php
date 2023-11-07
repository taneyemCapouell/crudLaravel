<?php

// use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
// use App\Http\Controllers\inscriptionController;

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
Route::get('/detail_etudiant/{id}',[EtudiantController::class, 'detail_etudiant']);
Route::get('/update_etudiant/{id}',[EtudiantController::class, 'update_etudiant']);
Route::get('/delete_etudiant/{id}',[EtudiantController::class, 'delete_etudiant']);
Route::get('/etudiant',[EtudiantController::class, 'liste_etudiant']);
Route::get('/ajouter',[EtudiantController::class, 'ajouter_etudiant']);
Route::get('/ajouter/traitement',[EtudiantController::class, 'ajouter_etudiant_traitement']);
Route::get('/update/traitement',[EtudiantController::class, 'update_etudiant_traitement']);

Route::get('/ajout_etud', function () {
    return view('/etudiant.ajouter');
});

Route::get('/index', function () {
    return view('/layouts.index');
});

// wooflash
Route::get('/', function () {
    return view('/welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', function () {
    return view('/layouts.index');
});
Route::get('/deconnection',[EtudiantController::class,'deconnection_user']);






