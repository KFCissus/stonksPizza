<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/bestellen', function () {
    return view('bestellen');
})->middleware('auth');

Route::get('/home', function () {
    return view('homepage');
});

Route::get('/winkelwagen', [OrderController::class, 'showCart'])->name('cart.show')->middleware('auth');

Route::post('/order',[OrderController::class,'addPizzaToOrder']);
Route::post('/deleteorderline',[OrderController::class,'deleteorderline']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Use the 'order.status' route name for order-status
    Route::get('/order-status', [OrderController::class, 'redirectToOrderStatus'])->name('order.status');

    Route::get('/koerier', function () {
        return view('koerier');
    })->name('koerier');

    Route::get('/koerier-item-1', function () {
        return view('koerier-item-1');
    });

    // Koerier Item 2
    Route::get('/koerier-item-2', function () {
        return view('koerier-item-2');
    });

    // Koerier Item 3
    Route::get('/koerier-item-3', function () {
        return view('koerier-item-3');
    });

    // Koerier Item 4
    Route::get('/koerier-item-4', function () {
        return view('koerier-item-4');
    });

    Route::get('/track-and-trace', function () {
        return view('track-and-trace');
    });

});

require __DIR__.'/auth.php';
