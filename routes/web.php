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
    echo "hello this is mehran from other  side of world";
});
Route::get('/a',  function () {
    echo "hello user1";
});
Route::post('/processRequest', 'PageController@processRequest'
);
Route::get('/returnProceccedRequest', 'PageController@returnProceccedRequest'
);
Route::get('/createFile', 'PageController@createFile'
);
