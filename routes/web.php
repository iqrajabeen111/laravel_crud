<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopsController;


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

// Route::get('/master', function () {
//     return view('layout.master');
// });
// Route::get('/head', function () {
//     return view('layout.head');
// });
// Route::get('/header', function () {
//     return view('layout.header');
// });
Route::get('/create_shop', function () {
    return view('create_shop');
});

Route::get('/', [ShopsController::class, 'index']);  
Route::get('/shop', [ShopsController::class, 'index']);  
Route::post('/add_shop', [ShopsController::class, 'store']);  