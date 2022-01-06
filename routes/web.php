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
Route::get('/manage-category', [CategoryController::class, 'viewCategories']);
Route::get('/add-category-form', [CategoryController::class, 'addForm']);
Route::post('/add-category', [CategoryController::class, 'addCategory']);
Route::get('/editCategory/{id}', [CategoryController::class, 'editCategory']);
Route::post('/updateCategory/{id}', [CategoryController::class, 'updateCategory']);
Route::get('/deleteCategory/{id}', [CategoryController::class, 'deleteCategory']);

//MANAGE MENU
Route::get('/manage-menu', [MenuAdminController::class, 'viewMenus']);
Route::get('/add-menu-form', [MenuAdminController::class, 'addMenuForm']);
Route::post('/add-menu', [MenuAdminController::class, 'addMenu']);
Route::get('/editMenu/{id}', [MenuAdminController::class, 'editMenuForm']);
Route::post('/updateMenu/{id}', [MenuAdminController::class, 'updateMenu']);
Route::get('/deleteMenu/{id}', [MenuAdminController::class, 'deleteMenu']);

// Route::get('/manage-order', function () {
//     return view('manage-order');
// });



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
