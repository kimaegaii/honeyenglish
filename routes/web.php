<?php

use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/test', function () {
    return view('test');
});

Route::get('/profile', function () {
    return view('profile');
})->name('profile');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/editProfile', function () {
    return view('editProfile');
})->middleware(['auth'])->name('editProfile');

Route::get('/messages', function () {
    return view('messages');
})->middleware(['auth'])->name('messages');

Route::get('/message', function(){
    return view('message');
})->name('message');

Route::get('/readMessage', function(){
    return view('readMessage');
})->name('readMessage');


require __DIR__.'/auth.php';
