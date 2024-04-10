<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\FrontendController::class, 'index'])->name('front.index');
Route::get('post/{post_id}',[App\Http\Controllers\FrontendController::class, 'show'])->name('front.show');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'backend', 'as'=>'backend.'], function(){
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
});
