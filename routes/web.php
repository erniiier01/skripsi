<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Customer
Route::resource('customer', 'CustomerController');

//Project
Route::resource('project', 'ProjectController');

//Location
Route::resource('location', 'LocationController');

//Jo
Route::resource('jo', 'JoController');

//Jo
Route::resource('asset', 'AssetController');

//Project Monitoring
Route::resource('projectmonitoring', 'ProjectMonitoringController');

//Job Report
Route::resource('jobreport', 'JobReportController');

//Report Asset
Route::resource('reportasset', 'ReportAssetController');

Route::resource('user', 'UserController');