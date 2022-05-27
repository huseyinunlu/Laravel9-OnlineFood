<?php

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
