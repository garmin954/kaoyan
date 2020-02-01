<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');

//    $router->get('/', 'HomeController@index');
    $router->resource('user', 'UsersController');

    $router->resource('students', 'StudentController');
    $router->resource('score', 'ScoreController');


//    $router->get('/', 'HomeController@index');
//    Route::prefix('query')->name('query.')->group(function (){
//        Route::get('user', '\App\Admin\Controllers\UsersController@user')->name('user');
//    });
});
