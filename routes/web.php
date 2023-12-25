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

Route::get('add-view-category',[AdminController::class,'addViewCategory'])->name('addViewCategory');
Route::get('addCategory', [AdminController::class, 'addCategory'])->name('addCategory');
Route::post('storeCategory', [AdminController::class,'storeCategory'])->name('storeCategory');
Route::get('deleteCategory/{id}', [AdminController::class,'deleteCategory'])->name('deleteCategory');
Route::get('editCatgory/{id}' , [AdminController::class,'editCategory'])->name('editCategory');
Route::post('updateCategory', [AdminController::class,'updateCategory'])->name('updateCategory');
