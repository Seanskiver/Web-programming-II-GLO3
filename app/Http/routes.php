<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Auth 


Route::get('/login', function() {
    return view('auth/newlogin');
});

Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getlogout');
// Home
Route::get('/', 'HomeController@index');
Route::get('/register', function() {
    return view('auth/register');
});
Route::post('/register', 'Auth\AuthController@postRegister');

// User routes
// Get user profile
Route::get('/user/{id}', 'UserController@getOne');
// Edit User
Route::put('/user/{id}', 'UserController@edit');


// Post routes 
// Get all
Route::get('/posts', 'PostController@getAll');
// Add Post
Route::post('/post', 'PostController@store');
// Delete post
Route::delete('/post/{id}', 'PostController@destroy');
// Edit Post Form
Route::get('/post/{id}', 'PostController@getOne');

// Edit the post
Route::patch('/post/{id}', 'PostController@editPost');

Route::get('/graph', function() {
    return view('graph');
});


