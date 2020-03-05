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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('inputCompany', 'companiesController@inputCompanies');
Route::get('inputEmployees', 'employeesController@inputEmployees');
Route::get('listCompany', 'companiesController@listCompany');
Route::get('updateCompany/{id}', 'companiesController@updateCompany');
Route::get('updateEmployees/{id_employees}', 'employeesController@updateEmployees');
Route::get('listEmployees', 'employeesController@listEmployees');
Route::get('hapusEmployees/{id_employees}', 'employeesController@hapusEmployees');
Route::get('hapusCompany/{id}', 'companiesController@hapusCompany');

Route::post('prosesTambahEmployees', 'employeesController@prosesTambahEmployees');
Route::post('prosesTambahCompany', 'companiesController@prosesTambahCompany');
Route::post('updateCompanyProses', 'companiesController@updateCompanyProses');
Route::post('updateEmployeesProses', 'employeesController@updateEmployeesProses');
Route::post('prosesHapusEmployees', 'employeesController@prosesHapusEmployees');
Route::post('prosesHapusCompany', 'companiesController@prosesHapusCompany');