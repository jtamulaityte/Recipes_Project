<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IngredientController;
use App\Http\Controllers\Admin\RecipeController;
use App\Http\Controllers\Front\FrontController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'role'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('admin/recipes/index', [RecipeController::class, 'index']);
    Route::get('admin/recipes/create', [RecipeController::class, 'create']);
    Route::post('admin/recipes/store', [RecipeController::class, 'store']);
    Route::any('admin/recipes/edit/{id}', [RecipeController::class, 'edit'])->name('recipe.edit');
    Route::delete('admin/recipes/delete/{id}', [RecipeController::class, 'delete'])->name('recipe.delete');

    Route::get('admin/categories/index', [CategoryController::class, 'index']);
    Route::get('admin/categories/create', [CategoryController::class, 'create']);
    Route::post('admin/categories/create', [CategoryController::class, 'store']);
    Route::any('admin/categories/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::delete('admin/categories/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    Route::get('admin/ingredients/index', [IngredientController::class, 'index']);
    Route::get('admin/ingredients/create', [IngredientController::class, 'create']);
    Route::post('admin/ingredients/create', [IngredientController::class, 'store']);
    Route::any('admin/ingredients/edit/{id}', [IngredientController::class, 'edit'])->name('admin.ingredients.edit');
    Route::delete('admin/ingredients/delete/{id}', [IngredientController::class, 'delete'])->name('admin.ingredients.delete');
});

require __DIR__.'/auth.php';

Route::get('/', [FrontController::class, 'home']);
Route::get('recipes', [FrontController::class, 'index']);
Route::get('recipe/{id}', [FrontController::class, 'show'])->whereNumber('id');

