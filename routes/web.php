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

Route::group(['as' => 'learn.', 'middleware' => 'auth', 'prefix' => 'chux'], function () {

    Route::get('pages', 'PagesController@index')->name('pages.show');
    
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome.show');
    
    Route::view('/home', 'welcome');
    
});

Route::view('dashboard', 'dashboard');

Route::view('index', 'index');

Route::get('model/{user}', function ($user) {
    return $user->name;
});

Route::resource('tasks/', 'TasksController');

Route::redirect('/', 'chux/', 301);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/home', 'HomeController@index');
Route::get('to/{params?}', 'HomeController@goto');