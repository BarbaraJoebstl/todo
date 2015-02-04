<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
// Route::model('tasks', 'Task');
// Route::model('topics', 'Topic');


Route::bind('tasks', function($value, $route) {
	return Task::whereSlug($value)->first();
});
Route::bind('topics', function($value, $route) {
	return Topic::whereSlug($value)->first();
});

Route::get('/', 'TopicsController@index');

Route::post('topics/{slug}/changeTaskOrder', 'TasksController@changeTaskOrder');



Route::resource('topics', 'TopicsController');
Route::resource('topics.tasks', 'TasksController');
