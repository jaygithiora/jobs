<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
Route::domain(env('APP_URL'))->group(function(){
    Route::get('/', function () {
        return view('index');
    });
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::controller(AdminController::class)->prefix('admin')->group(function(){
    Route::get('/', 'index');
    Route::get('/dashboard', 'index');
    Route::get('/schools', 'schools');
    Route::get('/settings/countries', 'countries');
    Route::get('/settings/school/types', 'schoolTypes');
});

Route::domain('{client}.'. env('APP_URL'))->group(function(){
    Route::get('/',function(){
        return 'tuko rada!';
    });
});
