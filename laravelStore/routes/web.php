<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

//Creo la url per le pagine della home index e about
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');


//Pagine Prodotto
Route::get('/prodotti', [ProductController::class, 'index'])->name('prodotti.index');
Route::get('/prodotto/{id}', [ProductController::class, 'show'])->name('prodotto.show');

// Route::get('/', function () {
//     return view('home.index');
// });

// Route::get('/about', function(){
//     $saluto = "Ciao dalla funzione route di Laravle";
//     return view('home.about')->with("saluto",$saluto);
// });
