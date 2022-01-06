<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuAdminController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Auth;
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

// CART
Route::get('/cart', [CartController::class, 'displayAll'])->middleware('role:member')->name('cart');
Route::post('/add-cart-item', [CartItemController::class, 'addItem'])->middleware('role:member');
Route::post('/delete-cart-item/{cart_id}/{menu_id}', [CartItemController::class, 'deleteItem'])->middleware('role:member');
Route::get('/edit-cart-item/{cart_id}/{menu_id}', [CartItemController::class, 'getUpdateItemPage'])->middleware('role:member');
Route::post('/edit-cart-item/{cart_id}/{menu_id}', [CartItemController::class, 'updateItem'])->middleware('role:member');

// AUTH
Auth::routes();

// HOME
Route::redirect('/', 'home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// MENU
Route::get('/locked-menu', [MenuController::class, 'viewCategory'])->middleware('role:member');
Route::get('/locked-menu/{catId}', [MenuController::class, 'viewMenuBasedOnCategory'])->middleware('role:member');
Route::get('/menu/{catId}', [MenuController::class, 'unlockMenu'])->middleware('role:member')->name('menu');

// PAYMENT
Route::get('/paymentForm', [PaymentController::class, 'payForm'])->middleware('role:member');
Route::post('/checkout', [TransactionController::class, 'checkout'])->middleware('role:member');

// HISTORY TRANSACTION
Route::get('/history-transaction', [TransactionController::class, 'displayAll'])->middleware('role:member')->name('history-transaction');

// RESERVATION
Route::get('/reservation', [ReservationController::class, 'index'])->middleware('role:member');
Route::get('/select-table', [ReservationController::class, 'selectTable'])->middleware('role:member');
Route::post('/add-reservation', [ReservationController::class, 'addReservation'])->middleware('role:member');

// Route::get('/cart', function () {
//     return view('cart');
// });

// Route::get('/manage-admin', function () {
//     return view('manage-admin');
// });

// Route::get('/add-admin', function () {
//     return view('add-admin');
// });

// Route::get('/manage-reservation', function () {
//     return view('manage-reservation');
// });

// MANAGE-CATEGORY
Route::get('/manage-category', [CategoryController::class, 'viewCategories'])->middleware('role:admin');
Route::get('/add-category-form', [CategoryController::class, 'addForm'])->middleware('role:admin');
Route::post('/add-category', [CategoryController::class, 'addCategory'])->middleware('role:admin');
Route::get('/editCategory/{id}', [CategoryController::class, 'editCategory'])->middleware('role:admin');
Route::post('/updateCategory/{id}', [CategoryController::class, 'updateCategory'])->middleware('role:admin');
Route::get('/deleteCategory/{id}', [CategoryController::class, 'deleteCategory'])->middleware('role:admin');

//MANAGE MENU
Route::get('/manage-menu', [MenuAdminController::class, 'viewMenus'])->middleware('role:admin');
Route::get('/add-menu-form', [MenuAdminController::class, 'addMenuForm'])->middleware('role:admin');
Route::post('/add-menu', [MenuAdminController::class, 'addMenu'])->middleware('role:admin');
Route::get('/editMenu/{id}', [MenuAdminController::class, 'editMenuForm'])->middleware('role:admin');
Route::post('/updateMenu/{id}', [MenuAdminController::class, 'updateMenu'])->middleware('role:admin');
Route::get('/deleteMenu/{id}', [MenuAdminController::class, 'deleteMenu'])->middleware('role:admin');

Route::get('/manage-order', [TransactionController::class, 'displayOrder'])->middleware('role:admin');

Route::get('/manage-reservation', [ReservationController::class, 'displayAll'])->middleware('role:admin');



// Route::get('/user-home', function () {
//     return view('user-home');
// });

// Route::get('/reservation', function () {
//     return view('reservation');
// });

// Route::get('/category', function () {
//     return view('category');
// });

// Route::get('/locked-menu', function () {
//     return view('locked-menu');
// });

// Route::get('/menu', function () {
//     return view('menu');
// });

// Route::get('/cart', function () {
//     return view('cart');
// });

// Route::get('/paymentForm', [paymentController::class, 'payForm']);
// Route::get('/category', function () {
//     return view('category');
// });

// Route::get('/locked-menu', function () {
//     return view('locked-menu');
// });

// Route::get('/menu', function () {
//     return view('menu');
// });

// Route::get('/cart', function () {
//     return view('cart');
// });
