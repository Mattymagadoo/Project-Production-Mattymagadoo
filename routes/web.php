<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [PostController::class, 'index'])
->middleware(['auth']);

Route::get('/users', [PostController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/adminUsers', [AdminController::class, 'adminUsers']);

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/products/{product}/edit' , [ProductController::class, 'edit']);
Route::get('/products/{product}/delete' , [ProductController::class, 'delete']);
Route::get('/products/{product}', [ProductController::class, 'show']);
Route::patch('/products/{product}', [ProductController::class, 'update']);
Route::get('/products', [ProductController::class, 'index']);

Route::get('/department', [DepartmentController::class, 'index']);

Route::get('/department/{department}', [DepartmentController::class, 'category']);

Route::get('/documents', [DocumentController::class, 'index']);

Route::get('/post-create', [PostController::class, 'newPost']);
Route::post('/post-create', [PostController::class, 'create']);

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
