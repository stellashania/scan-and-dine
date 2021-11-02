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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/manage-admin', function () {
    return view('manage-admin');
});

Route::get('/add-admin', function () {
    return view('add-admin');
});

Route::get('/manage-reservation', function () {
    return view('manage-reservation');
});

Route::get('/manage-category', function () {
    return view('manage-category');
});

Route::get('/add-category', function () {
    return view('add-category');
});

Route::get('/manage-menu', function () {
    return view('manage-menu');
});

Route::get('/add-menu', function () {
    return view('add-menu');
});

Route::get('/manage-order', function () {
    return view('manage-order');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/user-home', function(){
    return view ('user-home');
});

Route::get('/reservation', function(){
    return view ('reservation');
});

Route::get('/category', function(){
    return view ('category');
});

Route::get('/locked-menu', function(){
    return view ('locked-menu');
});

Route::get('/menu', function(){
    return view ('menu');
});

Route::get('/cart', function(){
    return view ('cart');
});