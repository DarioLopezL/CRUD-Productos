<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crud;

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

/*Route::get('/', function () {
    return view('welcome');
}); */

Route::get('crud', [crud::class,'index'])->name('crud');
Route::get('crud/creacion', [crud::class,'create'])->name('crud.create');
Route::post('crud/creacion/create', [crud::class,'store'])->name('crud.store');
Route::get('crud/productos', [crud::class,'mostrar'])->name('crud.mostrar');
Route::get('crud/productos/{id}',[crud::class,'unico'])->name('crud.unico');
Route::get('crud/productos/editar/{productos}',[crud::class,'editar'])->name('crud.editar');
Route::put('crud/productos/editar/update/{productos}',[crud::class,'update'])->name('crud.update');
Route::delete('crud/productos/editar/delete/{productos}', [crud::class,'destroy'])->name('crud.destroy');