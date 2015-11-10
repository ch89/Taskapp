
<?php

Route::get('/', function() {
	return view('pages.home');
});

Route::resource('tasks', 'TasksController');

// Route::get('new', function() {
// 	$task = new App\Task();
// 	$task->title = 'Nisse';
// 	$task->content = 'Hult';
// 	$task->save();
// });






// Route::resource('photo', 'PhotoController', ['only' => ['index', 'show']]);
// Route::resource('photo', 'PhotoController', ['except' => ['create', 'store', 'update', 'destroy']]);