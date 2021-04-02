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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/table', function () {
   for($i =1; $i <= 10 ; $i++){
       echo "$i * 7 = ". $i*7 ."<br>";
   }   
});


Route::get('/table/{number}', function ($number) {
   for($i =1; $i <= 10 ; $i++){
       echo "$i * $number = ". $i* $number ."<br>";
   }   
});