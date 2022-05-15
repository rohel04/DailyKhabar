<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReporterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ViewerController;
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


Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [ProjectController::class, 'index'])->name('project.index');
    Route::get('/register', [UserController::class, 'registerView'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register.store');

// Reporter
    Route::get('/reporters',[ReporterController::class,'index'])->name('reporters.index');
Route::get('/reporters/add_reporters',[ReporterController::class,'index'])->name('reporters.index');
Route::post('/reporters/store',[ReporterController::class,'store'])->name('reporters.store');
Route::get('/reporters/view',[ReporterController::class,'list'])->name('reporters.list');
Route::get('/reporters/edit/{reporter}',[ReporterController::class ,'edit'])->name('reporters.edit');
Route::post('/reporters/update/{reporter}',[ReporterController::class,'update'])->name('reporters.update');
Route::get('/reporters/delete/{reporter}',[ReporterController::class,'destroy'])->name('reporters.delete');
    

//category
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/add', [CategoryController::class, 'create'])->name('category.add');
Route::post('/category/add', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/delete/{category}',[CategoryController::class,'destroy'])->name('category.delete');
Route::get('/category/edit/{category}',[CategoryController::class ,'edit'])->name('category.edit');
Route::post('/category/update/{category}',[CategoryController::class ,'update'])->name('category.update');

//news
Route::get('/news', [NewsController::class, 'index'])->name('news.index');

Route::get('/news/add', [NewsController::class, 'create'])->name('news.add');
Route::post('/news/add', [NewsController::class, 'store'])->name('news.store');
Route::get('/news/delete/{news}',[NewsController::class,'destroy'])->name('news.delete');


Route::get('/news/edit/{news}',[NewsController::class ,'edit'])->name('news.edit');
Route::post('/news/update/{news}',[NewsController::class ,'update'])->name('news.update');



});


Route::get('/',[ViewerController::class,'index'])->name('index');



Route::get('/login', [UserController::class, 'loginView'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.store');


Route::get('/logout',[UserController::class,'logout'])->name('logout');

// Route::get('/reporters/add_reporters',[ReporterController::class,'reportersView'])->name('reporters');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');


//viewer
Route::get('/category/{cname}',[ViewerController::class,'cat'])->name('category');

//Readmore
Route::get('/readmore/{id}',[ViewerController::class,'show'])->name('readmore');

//Reporter's news listing
Route::get('/reporter/{r_name}',[ViewerController::class,'rn_listing'])->name('reporter_news');