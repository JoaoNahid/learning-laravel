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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
// html fica em /resources/contact.blade.php
Route::get('/contact', function() {
    return view('contact');
});

Route::get('/events/create', [EventController::class,  'create']);

Route::get('/products', function() {
    return view('products');
});

Route::get('/product/{id}/{category?}', function($id, $category = null){
    // pegando query parameter --> http://127.0.0.1:8000/product/1/blusa?query=Nahid
    $query = request('query');

    return view('product', ['id'=> $id, 'category'=>$category, 'query' => $query]);
});
