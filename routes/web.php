<?php

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
use App\Models\Project;

Route::get('/', function () {
    return view('index')->with('projects', Project::all()->sortByDesc('id'));
})->name('index');

Route::get('/photos', function() {
	return view('photos');
})->name('photos');

Route::get('/projects', 'ProjectController@showAll')->name('projects');
Route::get('/projects/{id}/description', 'ProjectController@projectDescription');