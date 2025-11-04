<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WebController::class, 'index'])->name('books.index');
Route::get('/authors', [WebController::class, 'authors'])->name('authors.index');
Route::get('/rate', [WebController::class, 'rate'])->name('ratings.create');
