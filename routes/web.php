<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\InscricaoController;

Route::get('/',[InscricaoController::class,'index']);

Route::get('/inscricao/create',[InscricaoController::class,'create']);
Route::get('/inscricao/{id}',[InscricaoController::class,'gerarPDF']);
Route::post('/inscricoes', [InscricaoController::class, 'store']);  

Route::get('/home', function () {
    return view('home');
});

