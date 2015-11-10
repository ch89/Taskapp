
<?php

Route::get('/', function() {
	return view('pages.home');
});

Route::resource('users', 'UsersController');
Route::resource('tasks', 'TasksController');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Route::get('new', function() {
// 	$task = new App\Task();
// 	$task->title = 'Nisse';
// 	$task->content = 'Hult';
// 	$task->save();
// });






// Route::resource('photo', 'PhotoController', ['only' => ['index', 'show']]);
// Route::resource('photo', 'PhotoController', ['except' => ['create', 'store', 'update', 'destroy']]);