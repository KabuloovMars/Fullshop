<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
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
    return view('home.index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/dash',[MainController::class,'dashboard']);

//category


Route::get('add-view-category',[AdminController::class,'addViewCategory'])->name('addViewCategory');
Route::get('addCategory', [AdminController::class, 'addCategory'])->name('addCategory');
Route::post('storeCategory', [AdminController::class,'storeCategory'])->name('storeCategory');
Route::get('deleteCategory/{id}', [AdminController::class,'deleteCategory'])->name('deleteCategory');
Route::get('editCatgory/{id}' , [AdminController::class,'editCategory'])->name('editCategory');
Route::post('updateCategory', [AdminController::class,'updateCategory'])->name('updateCategory');

//product


Route::get('add-view-product', [AdminController::class,'addViewProduct'])->name('addViewProduct');
Route::post('add-product',[AdminController::class,'addProduct'])->name('addProduct');
Route::get('view-product',[AdminController::class,'viewProduct'])->name('viewProduct');
Route::get('productEdit/{id}',[AdminController::class,'productEdit'])->name('productEdit');

Route::post('productUpdate' ,[AdminController::class,'productUpdate'])->name('productUpdate');

Route::get('productDelete/{id}',[AdminController::class,'productDelete'])->name('productDelete');

Route::get('search-Product',  [AdminController::class,'searchProduct'])->name('searchProduct');


//client page



Route::get('/', [MainController::class ,'indexHomeProduct']);

Route::get('cart-View-Product', [MainController::class, 'cartViewProduct'])->name('cartViewProduct');





