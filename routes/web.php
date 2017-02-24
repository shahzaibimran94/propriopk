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
    return view('login');
});

Auth::routes();

Route::get('/insert', 'orderInsertController@index');
Route::post('/create', 'orderInsertController@insert');
Route::get('view-records','orderViewController@index');
Route::get('viewOrder/{id}','orderViewController@view');
Route::get('changeStatus/{id}','orderViewController@change');

Route::get('/insertAdmin', 'adminInsertController@index');
Route::post('/createAdmin', 'adminInsertController@insert');
Route::get('/adminSetting', 'adminUpdateController@setting');


Route::get('viewAdmin-records','adminViewController@index');

Route::get('updateAdmin','adminUpdateController@index');
Route::get('update/{id}','adminUpdateController@show');
Route::post('update/{id}','adminUpdateController@edit');

Route::get('delete/{id}','deleteAdminController@index');
Route::get('deleteOrder/{id}','orderViewController@delete');

Route::get('updateOrder/{id}','orderInsertController@fetchData');
Route::post('updateOrder/{id}','orderInsertController@update');

Route::get('/portal', 'portalController@index');
Route::post('/portal', 'portalController@check');
Route::get('/logout', 'portalController@logout');

Route::get('/login', 'loginController@index');

Route::get('/home', 'HomeController@index');