<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TransactionController;
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
// Route::post('/add-cart-item', [CartItemController::class, 'addItem'])->middleware('role:member');
Route::post('/delete-cart-item/{cart_id}/{menu_id}', [CartItemController::class, 'deleteItem'])->middleware('role:member');
Route::get('/edit-cart-item/{cart_id}/{menu_id}', [CartItemController::class, 'getUpdateItemPage'])->middleware('role:member');
Route::post('/edit-cart-item/{cart_id}/{menu_id}', [CartItemController::class, 'updateItem'])->middleware('role:member');

// AUTH
Auth::routes();

// HOME
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// MENU
Route::get('/locked-menu', [MenuController::class, 'viewCategory']);
Route::get('/locked-menu/{catId}', [MenuController::class, 'viewMenuBasedOnCategory']);
Route::post('/menu/{catId}', [MenuController::class, 'unlockMenu']);

// PAYMENT
Route::get('/paymentForm', [PaymentController::class, 'payForm']);
Route::post('/checkout', [TransactionController::class, 'checkout']);

// HISTORY TRANSACTION
Route::get('/history-transaction', [TransactionController::class, 'displayAll'])->name('history-transaction');

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



Route::get('/user-home', function () {
    return view('user-home');
});

Route::get('/reservation', function () {
    return view('reservation');
});

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
Route::get('/reservation', [ReservationController::class, 'index']);
Route::get('/select-table', [ReservationController::class, 'selectTable']);
Route::post('/add-reservation', [ReservationController::class, 'addReservation']);

Route::get('/paymentForm', [paymentController::class, 'payForm']);
// Route::get('/cart', function () {
//     return view('cart');
// });
