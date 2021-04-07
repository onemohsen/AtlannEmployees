<?php

use App\Http\Livewire\AdminComponent;
use App\Http\Livewire\UserComponent;
use App\Http\Middleware\EnsureAdmin;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified',EnsureAdmin::class])->group(function () {

    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/', AdminComponent::class)->name('dashboard');
        Route::get('/user', UserComponent::class)->name('user');
    });

});

