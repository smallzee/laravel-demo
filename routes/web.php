<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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


Route::get('demo', function (){
    $slug = request('slug');

    return view('demo', array(
        'slug'=>$slug
    ));

});

Route::get('/posts/{slug}', function ($slug){
   return view('posts', array(
       'slug'=>$slug
   ));
});

Route::get('/category/{slug}', [CategoryController::class, 'index'])->name('category.index');