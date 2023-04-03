<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\SiteController;
use App\Models\Client;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SiteController::class,'index'])->name('index');
Route::get('/clients',[ClientController::class,'index'])->name('clients.index');
Route::get('/clients/create',[ClientController::class,'create'])->name('clients.create');
Route::get('/clients/{id}',[ClientController::class,'show'])->name('clients.show');
//show mostra um cliente em expecifico
Route::post('/clients',[ClientController::class,'store'])->name('clients.store');
//post de postar
//get é pegar algo,já o post envia dados do navegador para o servidor

Route::get('/clients/{id}/edit',[ClientController::class,'edit'])->name('clients.edit');
//encaminha para uma página com um formulário
Route::put('/clients/{id}',[ClientController::class,'update'])->name('clients.update');
//put é para editar 
//put atualiza os dados do cliente
Route::delete('/clients/{id}',[ClientController::class,'destroy'])->name('clients.destroy');
