<?php

use App\Http\Controllers\BooksController;
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
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('addtocart',[BooksController::class,'add_to_cart'])->name('addtocart');
    Route::get('cartlist',[BooksController::class,'cartList'])->name('cartlist');
});
Route::get('/index', [BooksController::class, 'index'])->name('index');
Route::get('/create', [BooksController::class, 'create'])->name('create');
Route::post('store',[BooksController::class,'store'])->name('store');
Route::get('show/{id}', [BooksController::class, 'show'])->name('show');

Route::get('cartlist',[BooksController::class,'cartList'])->name('cartlist');

require __DIR__.'/auth.php';
