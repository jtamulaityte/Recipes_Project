<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\RecipeController;
use App\Http\Controllers\ProfileController;
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
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/recipes/index', [RecipeController::class, 'index']);
Route::resource('admin/categories', CategoryController::class);

// Route::get('admin/categories/create', [CategoryController::class, 'create']);
// Route::post('admin/categories/create', [CategoryController::class, 'store']);
// Route::any('admin/categories/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
// Route::delete('categories/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete')->middleware('auth'); //middleware neleidzia istrinti neprisijungusiems vartotojams
// Route::get('categories/{id}', [CategoryController::class, 'show']);
