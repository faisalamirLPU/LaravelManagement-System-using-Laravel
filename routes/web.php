<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TopicController;

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
    //return view('admin/topics/topics');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/add-topic',[App\Http\Controllers\TopicController::class, 'getAddNewTopic'])->name('admin-get-add-new-topic');
Route::post('/add-topic',[App\Http\Controllers\TopicController::class, 'postAddNewTopic'])->name('admin-post-add-new-topic');
Route::get('/show-topic',[App\Http\Controllers\TopicController::class, 'show'])->name('admin-show-topic');
Route::get('/delete-topic/{id}',[App\Http\Controllers\TopicController::class, 'destroy']);
Route::get('/edit-topic/{id}',[App\Http\Controllers\TopicController::class, 'getEdit'])->name('admin-get-edit-topic');
Route::post('/edit-topic/{id}',[App\Http\Controllers\TopicController::class, 'postEdit'])->name('admin-post-edit-topic');





// Route::get('/add', function () {
//     return view('admin.topics.topics')->name('admin.topics.topics');
// });

// Route::prefix('/admin')->group(function () {
//     Route::get('/',[App\Http\Controllers\AdminHomeController::class, 'etHome'])->name('admin-get-home');

//     Route::prefix('topic')->group(function () {
        
//         Route::get('/add',[App\Http\Controllers\TopicController::class, 'getAddNewTopic'])->name('admin-get-add-new-topic');

//     });

//});

Route::post('add',[TopicController::class,'getAddNewTopic']);
