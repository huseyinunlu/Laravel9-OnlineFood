<?php

use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
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

/*Do something in route*/
Route::get('/hello', function(){
    return "Hello World";
});

/* Call view in route */
Route::get('/welcome', function () {
    return view('welcome');
});

/* Call Controller Function */
Route::get('/', [HomeController::class, 'index'])->name('home');

/* Route-> Controller-> View */
Route::get('/test', [HomeController::class, 'test'])->name('test');

/* Route with parameters */
Route::get('/param/{id}', [HomeController::class, 'param'])->name('param');

/* Route with post */
Route::post('/save', [HomeController::class, 'save'])->name('save');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/*##############################     ADMIN         #########################*/

Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin');

/*##############################     Admin Category         #########################*/
Route::get('/admin/category', [AdminCategoryController::class, 'index'])->name('admin_category');
Route::get('/admin/category/create', [AdminCategoryController::class, 'create'])->name('admin_category_create');
Route::post('/admin/category/store', [AdminCategoryController::class, 'store'])->name('admin_category_store');
Route::get('/admin/category/edit/{id}', [AdminCategoryController::class, 'edit'])->name('admin_category_edit');
Route::get('/admin/category/delete/{id}', [AdminCategoryController::class, 'destroy'])->name('admin_category_delete');
Route::get('/admin/category/show/{id}', [AdminCategoryController::class, 'show'])->name('admin_category_show');
Route::post('/admin/category/update/{id}', [AdminCategoryController::class, 'update'])->name('admin_category_update');

