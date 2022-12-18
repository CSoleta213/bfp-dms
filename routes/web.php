<?php

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

// ADMIN
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function() {
    // Example:
    // Route::get('/admin/home', [AdminController::class, 'adminHome'])->name('admin.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/establishments', [App\Http\Controllers\HomeController::class, 'establishments'])->name('establishments');
Route::get('/for-renewal', [App\Http\Controllers\HomeController::class, 'forRenewal'])->name('forRenewal');
Route::get('/new-applicant', [App\Http\Controllers\HomeController::class, 'newApplicant'])->name('newApplicant');
