<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index']);
Route::get('/redirect',[HomeController::class,'redirect']);
Route::get('view_category',[AdminController::class,'view_category']);
Route::post('/add_catagory',[AdminController::class,'add_catagory']);
Route::get('/delete_catagory/{id}',[AdminController::class,'delete_catagory']);
Route::get('/view_product',[AdminController::class,'view_product']);
Route::post('/add_product',[AdminController::class,'add_product']);
Route::get('show_product',[AdminController::class,'show_product']);
Route::get('/delete_product/{id}',[AdminController::class,'delete_product']);
Route::get('/update_product/{id}',[AdminController::class,'update_product']);
Route::post('update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);
Route::get('product_detail/{id}',[HomeController::class,'product_detail']);
Route::post('add_cart/{id}',[HomeController::class,'add_cart']);
Route::get('show_cart',[HomeController::class,'show_cart']);
Route::get('delete_cart_item/{id}',[HomeController::class,'delete_cart_item']);
Route::get('cart_order',[HomeController::class,'cart_order']);
Route::get('stripe/{totalprice}',[HomeController::class,'stripe']);
Route::get('order',[AdminController::class,'order']);
Route::get('delivered/{id}',[AdminController::class,'delivered']);
Route::get('print_pdf/{id}',[AdminController::class,'print_pdf']);
Route::get('send_email/{id}',[AdminController::class,'send_email']);
Route::post('user_send_email/{id}',[AdminController::class,'user_send_email']);
Route::get('table_search',[AdminController::class,'table_search']);
Route::get('show_order',[HomeController::class,'show_order']);
Route::get('cancel_order/{id}',[HomeController::class,'cancel_order']);
Route::get('/cart_data',[HomeController::class,'cart_data']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

