<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// router login (untuk mengakses Api akan diarahkan ke router ini terlebih dahulu)
$router->post('api/login', ['uses' => 'LoginController@index']);

// router grop
$router->group(['prefix' => 'api', 'middleware' => 'auth'], function () use ($router) {
    $router->get('mahasiswa', ['uses' => 'MahasiswaController@index']);
    $router->get('mahasiswa/{id}', ['uses' => 'MahasiswaController@show']);
    $router->delete('mahasiswa/{id}', ['uses' => 'MahasiswaController@destroy']);
    $router->put('mahasiswa/{id}', ['uses' => 'MahasiswaController@update']);
    $router->post('mahasiswa', ['uses' => 'MahasiswaController@create']);

    $router->get('matkul', ['uses' => 'TblMatkulController@index']);

    $router->get('dosen', ['uses' => 'TblDosenController@index']);

    $router->get('nilai', ['uses' => 'TblNilaiController@index']);

    $router->get('api', ['uses' => 'ApiController@getDataBymatkul']);
});
