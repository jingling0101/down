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

Route::get('/', function () {
    return view('index');
});

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['namespace' => 'App\Api\Controllers'], function ($api) {
        // Endpoints registered here will have the "foo" middleware applied.
        $api->post('user/login', 'AuthController@authenticate');
        $api->group(['middleware' => 'jwt.auth'],function ($api){
            $api->get('lesson', 'LessonsController@index');
        });
    });

});

Route::get('/test', 'SoftController@createSoft');


Route::post('/api_v2/soft/list', 'SoftController@getSoftList');



Route::get('api_v1/soft/list', function () {
    $a = [
        ["name" => "ne", "img_url"=>"http://www.baidu.com/a.jpg" , "down_url"=>"http://www.baidu.com/2.jpg" ,"count"=>100 ],
        ["name" => "list", "img_url"=>"http://www.baidu.com/a.jpg" , "down_url"=>"http://www.baidu.com/2.jpg" ,"count"=>100 ],
        ["name" => "jj", "img_url"=>"http://www.baidu.com/a.jpg" , "down_url"=>"http://www.baidu.com/2.jpg" ,"count"=>1000 ],
    ];
    $data = [
        "status" => 200,
        "error" => 0,
        "data" => $a
    ];
    $json = json_encode($data);
    return $json;
});

