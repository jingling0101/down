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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return view('index');
//});

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['namespace' => 'App\Api\Controllers'], function ($api) {
        // Endpoints registered here will have the "foo" middleware applied.
        $api->any('soft/list', 'SoftController@getSoftList');
        $api->any('soft/desc', 'SoftController@getSoftDesc');

        $api->post('user/login', 'AuthController@authenticate');
        $api->group(['middleware' => 'jwt.auth'],function ($api){
            $api->get('lesson', 'LessonsController@index');
        });
    });

});

Route::get('/test', 'SoftController@createSoft');


Route::any('/api_v2/soft/list', 'SoftController@getSoftList');

