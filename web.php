<?php

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
    //return view('welcome');
    echo "selamat datang nukman";
});
Route::get('/satu', function () {
    //return view('welcome');
    echo "one";
});
Route::get('/dua', function () {
    //return view('welcome');
    echo "two";
});
Route::get('/tiga', function () {
    //return view('welcome');
    echo "three";
});
Route::get('/empat', function () {
    //return view('welcome');
    echo "four";
});
Route::get('/lima', function () {
    //return view('welcome');
    echo "five";
});
Route::get('/enam', function () {
    //return view('welcome');
    echo "six";
});
Route::get('/tujuh', function () {
    //return view('welcome');
    echo "seven";
});
Route::get('/delapan', function () {
    //return view('welcome');
    echo "eight";
});
Route::get('/sembilan', function () {
    //return view('welcome');
    echo "nine";
});
//1.echo langsung nested
Route::get('/sepuluh', function () {
    //return view('welcome');
    echo "ten";
});

//2 manggil view
Route::get('/sepuluh', function () {
    return view('telo');
    echo "ten";
}); 
Route::get('/sepuluh', function () {
    return view('telo');
    echo "ten";
});

Route::get('/nemplate', function () {
    return view('template');
});

//3.manggil controller
Route::resource('kontak','kontakk');
Route::get('/', function(){
    return view('index');
});
//   file controlnya namanya = UsangController
//   nama url = usang
//   index = nama functionnya 
Route::get('/jeruk', 'kentang@godog');
Route::get('/CleaningService', 'CleaneController@index');
Route::resource('/satpam','satpam');
Route::get('/', function(){
    return view('index');
});
Route::resource('/kabupaten','kabupaten');
Route::get('/', function(){
    return view('index');
});