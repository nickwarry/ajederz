<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('info/peon',function(){
    return view("peon.index");
});

Route::get('info/torre',function(){
    return view("torre.index");
});

Route::get('info/alfil',function(){
    return view("alfil.index");
});

Route::get('info/caballo',function(){
    return view("caballo.index");
});

Route::get('info/reina',function(){
    return view("reina.index");
});

Route::get('info/rey',function(){
    return view("rey.index");
});

Route::get('info/arquero',function(){
    return view("arquero.index");
});










route::get("mitablero",function(){
    return view("tablero.index");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
