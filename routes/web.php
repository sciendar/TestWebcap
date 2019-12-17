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

Route::get('/', 'IndexController')->name('index');
Route::get('/contacts', 'ContactsController@index')->name('contacts');
Route::post('/send', 'ContactsController@send')->name('send');

Auth::routes();

Route::group([
    'middleware' => ['auth'],
    'prefix' => 'user',
    'as' => 'user.',
    'namespace' => 'User',
        ],
    function () {
        Route::resource('/', 'UserController');
    });

Route::group([
    'middleware' => ['auth','isAdmin'],
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin',
        ],
    function () {
        Route::resource('/', 'AdminController');
    });

