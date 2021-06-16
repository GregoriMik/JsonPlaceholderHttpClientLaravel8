<?php
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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

Route::get('/posts',[ClientController::class,'getAllPost'])->name('posts.getAllpost');

Route::get('/posts/{id}',[ClientController::class,'getPostById'])->name('posts.getpostsbyid');

Route::get('/add-post',[ClientController::class,'addPost'])->name('posts.addpost');
