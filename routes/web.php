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

Route::get('/', function () {
	return realpath(base_path('resources/views'));
    return view('welcome');
});

Route::get('users',['uses'=>'UsersController@index']);
Route::get('users/create',['uses' => 'UsersController@create']);
Route::post('users',['uses'=>'UsersController@store']);
/*
Route::get('users',function(){
	$users = [
		'0' => [
			'first_name' => 'Galang',
			'last_name' => 'Arbi',
			'location' => 'Sidoarjo'
		],
		'1' => [
			'first_name' => 'Rafika',
			'last_name' => 'Fauzia',
			'location' => 'Malang'
		]
	];
	return $users;
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index');
