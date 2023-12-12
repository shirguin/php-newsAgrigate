<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get("/", function () {
    return view("index");
});

Route::get("/categories", [CategoriesController::class, "index"])->name("categories");

Route::get("/categories/{id_category}/news", [NewsController::class, "index"])->name("news.index");

Route::get("/categories/{id_category}/news/{id}", [NewsController::class, "show"])->name("news.show");

//Route::group(['prefix' => ''], static function () {
//Route::get('/news', [NewsController::class, 'index'])
//    ->name('news');
//Route::get('/news/{id}/show', [NewsController::class, 'show'])
//    ->where('id', '\d+')
//   ->name('news.show');
//});




