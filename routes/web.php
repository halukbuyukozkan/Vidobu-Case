<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonController;

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
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::prefix('person')->group(function () {
        Route::get('/create', [PersonController::class, 'create'])->name('person.create');
        Route::post('/store', [PersonController::class, 'store'])->name('person.store');
        Route::get('/edit/{id}', [PersonController::class, 'edit'])->name('person.edit');
        Route::post('/update/{id}', [PersonController::class, 'update'])->name('person.update');
        Route::get('/delete/{id}', [PersonController::class, 'delete'])->name('person.delete');
    
    });
});
