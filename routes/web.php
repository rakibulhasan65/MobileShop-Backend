<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialLoginController;
use \App\Http\Controllers\Backend\ProductsController;
use \App\Http\Controllers\Backend\CategoryController;
use \App\Http\Controllers\Backend\BrandController;
use \App\Http\Controllers\Backend\ColorController;
use \App\Http\Controllers\Backend\CustomersController;
use \App\Http\Controllers\Backend\ProductsInvoiceController;
use \App\Http\Controllers\Backend\ReportsController;
use \App\Http\Controllers\Backend\SubscriptionController;

Route::get('/cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize');
    return 'Cache is cleared.';
});

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Social Login


Route::get('auth/google', [SocialLoginController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [SocialLoginController::class, 'handleGoogleCallback']);


Route::get('auth/facebook', [SocialLoginController::class, 'redirectToFB']);
Route::get('callback/facebook', [SocialLoginController::class, 'handleCallback']);

// Products Route
Route::resource('products', ProductsController::class);
Route::post('products/destroy/multiple/{id}', [ProductsController::class, 'multipleDestroy']);
Route::resource('categories', CategoryController::class);
Route::post('category/destroy/multiple/{id}', [CategoryController::class, 'multipleDestroy']);
Route::resource('brands', BrandController::class);
Route::post('brands/destroy/multiple/{id}', [BrandController::class, 'multipleDestroy']);
Route::resource('colors', ColorController::class);
Route::post('colors/destroy/multiple/{id}', [ColorController::class, 'multipleDestroy']);
Route::resource('customers', CustomersController::class);
Route::get('customer/getting-started/', [CustomersController::class, 'gettingStarted'])->name('customers.getting.started');

Route::prefix('invoices')->group(function () {
    Route::get('/', [ProductsInvoiceController::class, 'index'])->name('invoices.index');
    Route::get('/create', [ProductsInvoiceController::class, 'create'])->name('invoices.create');
//    Route::get('/show', [ProductsInvoiceController::class, 'show'])->name('invoices.show');
    Route::post('/destroy/{id}', [ProductsInvoiceController::class, 'destroy'])->name('invoices.destroy');
});


Route::prefix('reports')->group(function () {

    // Products View
    Route::get('/view', [ReportsController::class, 'view'])->name('reports.view');
    Route::post('/view/filter', [ReportsController::class, 'view'])->name('reports.view.filter');

    // Sales
    Route::get('/sales', [ReportsController::class, 'sales'])->name('reports.sales');
    Route::post('/sales/filter', [ReportsController::class, 'sales'])->name('reports.sales.filter');

    // Returns
    Route::get('/returns', [ReportsController::class, 'returns'])->name('reports.returns');

    // Customers Orders
    Route::get('/customer-orders', [ReportsController::class, 'customerOrders'])->name('reports.customer-orders');
    Route::post('/orders/filter', [ReportsController::class, 'customerOrders'])->name('reports.orders.filter');

    // Shipping
    Route::get('/shipping', [ReportsController::class, 'shipping'])->name('reports.shipping');
});

Route::prefix('subscription')->group(function () {
    Route::get('/view', [SubscriptionController::class, 'index'])->name('subscription.index');
});


