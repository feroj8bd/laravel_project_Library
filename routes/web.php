<?php

use App\Http\Controllers\libraryController;
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

Route::get('/', function () {
    return view('welcome');
});

// route of create
Route::get('/book/create', [LibraryController::class, 'create'])->name('books.create');

// route for index
Route::get('/book-list', [LibraryController::class, 'index'])->name('books.index');

// route of store
Route::post('/book', [LibraryController::class, 'store'])->name('books.store');

// route of show
Route::get('/book/show/{id}', [LibraryController::class, 'show'])->name('books.show');

// route of edit
Route::get('/book/edit/{id}', [LibraryController::class, 'edit'])->name('books.edit');

// route of update
Route::post('/book/update/{id}', [LibraryController::class, 'update'])->name('books.update');

// route of delete
Route::get('/book/delete/{id}', [LibraryController::class, 'destroy'])->name('books.delete');
