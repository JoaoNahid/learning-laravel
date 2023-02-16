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
    $nome = 'Nahid';
    $idade = 20;
    $arr = [1,2,3,4,5];
    $my_full_name = ['João', 'Eduardo', 'de', 'Godoi', 'Nahid'];
    $args = [
        'nome' => $nome, 
        'idade' => $idade,
        'profissao' => 'Web Dev',
        'arr' => $arr,
        'my_full_name' => $my_full_name
    ];
    return view('welcome', $args);
});
// html fica em /resources/contact.blade.php
Route::get('/contact', function() {
    return view('contact');
});
Route::get('/product', function() {
    return view('product');
});
