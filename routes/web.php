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
Route::prefix('admin')->name('admin.')->group(function (){
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');



/*##############################     Admin Category         #########################*/
    Route::prefix('/category')->name('category.')->group(function (){
        Route::get('/', [AdminCategoryController::class, 'index'])->name('index');
        Route::get('/create', [AdminCategoryController::class, 'create'])->name('create');
        Route::post('/store', [AdminCategoryController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [AdminCategoryController::class, 'edit'])->name('edit');
        Route::get('/delete/{id}', [AdminCategoryController::class, 'destroy'])->name('delete');
        Route::get('/show/{id}', [AdminCategoryController::class, 'show'])->name('show');
        Route::post('/update/{id}', [AdminCategoryController::class, 'update'])->name('update');
    });


});
