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
// memanggil menggunakan helper global view
// Route::get('/halo', function () {
//     return view('halo',[
//         "name" => "Jong Koding"
//     ]);
// });


//menggunakan atribut with 
Route::get('/halo', function () {
    return view('halo')->with('name','Rahman');
});
Route::get('/include', function () {
    return view('includingSubviews');
});