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

Route::get('api/battles/{id}', 'BattleController@show');
Route::get('api/battles', 'BattleController@index');
Route::post('api/battles/{id}/action', 'BattleController@takeAction');

//Route:resource('battle', 'BattleController', ['only' => ['index', 'create']]);

Route::get('/', function () {
    return view('index');
});
