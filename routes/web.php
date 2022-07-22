<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [App\Http\Controllers\GuestController::class, 'index']);
Route::post('/order/store', [App\Http\Controllers\GuestController::class, 'store']);
Route::get('/order/status', [App\Http\Controllers\GuestController::class, 'status']);
Route::get('/category/{id}', [App\Http\Controllers\GuestController::class, 'category']);
Route::post('/search', [App\Http\Controllers\GuestController::class, 'search']);


Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index']);
    Route::get('/order/online', [App\Http\Controllers\OrderController::class, 'online']);
    Route::get('/order/online/{id}', [App\Http\Controllers\OrderController::class, 'onlineShow']);
    Route::get('/order/manual', [App\Http\Controllers\OrderController::class, 'manual']);
    Route::get('/order/manual/{id}', [App\Http\Controllers\OrderController::class, 'manualShow']);
    Route::resource('order', OrderController::class);
    Route::post('/transaction/payment/', [App\Http\Controllers\TransactionController::class, 'payment']);
    Route::get('/transaction/invoice/online/{id}', [App\Http\Controllers\TransactionController::class, 'invoiceOnline']);
    Route::get('/transaction/invoice/manual/{id}', [App\Http\Controllers\TransactionController::class, 'invoiceManual']);
    Route::get('/transaction/summary/{id}', [App\Http\Controllers\TransactionController::class, 'summary']);
    Route::get('/transaction/summary/show/{date}', [App\Http\Controllers\TransactionController::class, 'summaryShow']);
    Route::resource('transaction', TransactionController::class);

    Route::post('/product/category', [App\Http\Controllers\ProductController::class, 'categoryChoose']);
    Route::post('/product/category/create', [App\Http\Controllers\ProductController::class, 'categoryCreate']);
    Route::post('/product/category/store', [App\Http\Controllers\ProductController::class, 'categoryStore']);
    Route::post('/product/create', [App\Http\Controllers\ProductController::class, 'create']);
    Route::get('/product/food', [App\Http\Controllers\ProductController::class, 'food']);
    Route::get('/product/drink', [App\Http\Controllers\ProductController::class, 'drink']);
    Route::resource('/product', 'App\Http\Controllers\ProductController');
    Route::resource('stock', StockController::class);
    Route::prefix('operator')->middleware('operator')->group(function () {
        Route::get('/report/{id}', [App\Http\Controllers\ReportController::class, 'sale']);
        Route::get('/report/sale/{date}', [App\Http\Controllers\ReportController::class, 'saleShow']);
        Route::get('/customer', [App\Http\Controllers\ReportController::class, 'customer']);
        Route::get('/employee', [App\Http\Controllers\OperatorController::class, 'employee']);
        Route::delete('/employee/delete/{id}', [App\Http\Controllers\OperatorController::class, 'employeeDestroy']);
        Route::get('/stock/edit/{id}', [App\Http\Controllers\StockController::class, 'operatorEdit']);
        Route::put('/stock/update/{id}', [App\Http\Controllers\StockController::class, 'operatorUpdate']);
        Route::delete('/stock/delete/{id}', [App\Http\Controllers\StockController::class, 'operatorDestroy']);
    });
});
