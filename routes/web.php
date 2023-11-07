<?php

use App\Http\Controllers\NoteController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [NoteController::class, 'index']);
 Route::resource('notes', NoteController::class);


// Route::get('/notes', 'NoteController@index')->name('notes.index');
// Route::get('/notes/create', 'NoteController@create')->name('notes.create');
// Route::post('/notes', 'NoteController@store')->name('notes.store');
// Route::get('/notes/{note}/edit', 'NoteController@edit')->name('notes.edit');
// Route::put('/notes/{note}', 'NoteController@update')->name('notes.update');
// Route::delete('/notes/{note}', 'NoteController@destroy')->name('notes.destroy');