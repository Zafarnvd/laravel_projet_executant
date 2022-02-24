<?php

use App\Http\Controllers\AvatarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GallerieController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get("/users", [UserController::class, "index"])->middleware('isAdmin')->name("index");


Route::get('/edit', [UserController::class, 'edit'])->name('edit');
Route::get('/edit/{user}', [UserController::class, 'editUser'])->name('user.edit');
Route::post('/edit/update/{user}', [UserController::class, 'update'])->name('edit.update');

Route::delete('/users/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');

Route::get('/avatars', [AvatarController::class, 'index'])->name('avatar');
Route::delete('/avatars/delete/{id}', [AvatarController::class, 'destroy'])->name('avatar.destroy');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::delete('/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');

Route::get('/images', [ImageController::class, 'index'])->name('images');
Route::get('/images/create', [ImageController::class, 'create'])->name('images.create');
Route::post('/images/store', [ImageController::class, 'store'])->name('images.store');
Route::delete('/images/delete/{id}', [ImageController::class, 'destroy'])->name('images.destroy');
Route::get('/images/edit/{id}', [ImageController::class, 'edit'])->name('images.edit');
Route::post('/images/update/{id}', [ImageController::class, 'update'])->name('images.update');

Route::get('/galleries', [GallerieController::class, 'index'])->name('galleries');
Route::get('/galleries/create', [GallerieController::class, 'create'])->name('galleries.create');
Route::post('/galleries/store', [GallerieController::class, 'store'])->name('galleries.store');
Route::get('/galleries/show/{id}', [GallerieController::class, 'show'])->name('galleries.show');
Route::delete('/galleries/delete/{id}', [GallerieController::class, 'destroy'])->name('galleries.destroy');
Route::get('/galleries/edit/{id}', [GallerieController::class, 'edit'])->name('galleries.edit');
Route::post('/galleries/update/{id}', [GallerieController::class, 'update'])->name('galleries.update');


require __DIR__.'/auth.php';
