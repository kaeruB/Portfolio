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

Route::get('/', 'PagesController@getHome');
Route::get('/about', 'PagesController@getAbout');
Route::get('/backend', 'PagesController@getBackend');
Route::get('/contact', 'PagesController@getContact');
Route::get('/frontend', 'PagesController@getFrontend');
Route::get('/message-sent', 'PagesController@getMessageSent');

// submit jest tez w MessageController, a w contact.blade.php jest submit
Route::post('/contact/submit', 'MessagesController@submit');

// getXProjects jest w ProjectsController (metoda)
Route::get('/backend', 'ProjectsController@getBackendProjects');
Route::get('/frontend', 'ProjectsController@getFrontendProjects');