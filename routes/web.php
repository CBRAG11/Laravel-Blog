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

// $stripe = App::make('App\Billing\Stripe');
// dd(resolve('App\Billing\Stripe'));

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@specificTask');

Route::get('/Posts', 'PostsController@index');

Route::get('/Posts/Blog', 'PostsController@blog')->name('home');	

Route::get('/Posts/create', 'PostsController@create');	

Route::post('/Posts', 'PostsController@store');	

Route::patch('/Posts', 'PostsController@update');	

Route::get('/Posts/{post}', 'PostsController@show');

Route::post('/Posts/{post}/comments', 'CommentsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/register', 'AuthController@register');

Route::post('/register', 'RegisterController@store');

Route::get('/login', 'AuthController@login');

Route::post('/login', 'AuthController@store');

Route::get('/logout', 'AuthController@destroy');