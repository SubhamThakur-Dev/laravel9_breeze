<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\PostController;
use \App\Http\Controllers\HomepageContoller;
use \App\Http\Controllers\ContactUsController;
use \App\Http\Controllers\ContactsController;

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

Route::get('/',[HomepageContoller::class, 'index'])->name('home');
Route::view('/about',   view:'about')->name('about');
Route::get('/contact',[ContactUsController::class, 'index'])->name('contact');
Route::post('/addcontact',[ContactUsController::class, 'insert'])->name('addcontact.insert');
Route::get('/post/{post}',[PostController::class, 'show'])->name('post.show');

Route::group(['middleware'=>['auth']], function()
{
    Route::get('/dashboard', function () 
    {
        return view('dashboard');
    })->name('dashboard');
    
    Route::group(['middleware'=>['is_admin']], function()
    {
        Route::resource('admin/categories',CategoryController::class);    
        Route::resource('admin/posts',PostController::class);    
        Route::resource('admin/contacts',ContactsController::class);    
    });
});
require __DIR__.'/auth.php';

