<?php

use App\Http\Controllers\ContactsController;
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

Route::get('/', [ContactsController::class, 'index'])->name('index');

Route::post('/add', [ContactsController::class, 'add'])->name('add');
Route::get('/delete/{id}', [ContactsController::class, 'delete'])->name('delete');

Route::post('/{id}/addNote', [ContactsController::class, 'addNote'])->name('addNote');
Route::get('/{id}/deleteNote/{noteId}', [ContactsController::class, 'deleteNote'])->name('deleteNote');
