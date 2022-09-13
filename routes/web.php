<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CouponController;
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

Route::get('/', [FrontController::class, 'index'])->name('front');


Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('dashboard_info', [DashboardController::class, 'dashboard_info'])->name('dashboard_info');


Route::get('dashboard_count', [DashboardController::class, 'dashboard_count'])->name('dashboard_count')->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('add_product', [ProductController::class, 'add_product'])->name('add_product');


Route::post('save_product', [ProductController::class, 'save_product'])->name('save_product');




Route::get('all_products', [ProductController::class, 'all_products'])->name('all_products');


Route::get('delete_product/{id}', [ProductController::class, 'delete_product'])->name('delete_product');



Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit');


Route::post('edit_product/{id}', [ProductController::class, 'edit_product'])->name('edit_product');



/*     Brand Routes       */

Route::get('addBrand', [BrandController::class, 'addBrand'])->name('addBrand');

Route::post('saveBrand', [BrandController::class, 'saveBrand'])->name('saveBrand');


Route::get('allbrands', [BrandController::class, 'index'])->name('allbrands');
/*     coupons Routes       */


Route::get('addCoupon', [CouponController::class, 'addCoupon'])->name('addCoupon');

Route::post('saveCoupon', [CouponController::class, 'saveCoupon'])->name('saveCoupon');

Route::get('allcoupons', [CouponController::class, 'index'])->name('allcoupons');

