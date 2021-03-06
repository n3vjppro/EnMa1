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

// Route::get('/', function () {
//     return view('dashboard');
// });
Auth::routes();
// Route::get('/', 'ShowTotalController@total');
// View::composer('dashboard','ShowTotalController@totalEngineer');

// Route::get('login', 'LoginController@showLoginForm');
//Route::post('login', 'LoginController@login');
Route::get('/', 'HomeController@index')->name('dashboard');
Route::get('logout',function (){
    Request::session()->flush();
    //Auth::logout();
    return redirect('login');
});


Route::get('login', function(){
    return view('login');
});

Route::get('/EngineerManagement','EngineerController@IndexEm');
Route::get('/AddEngineer','EngineerController@AddEm');
Route::get('/EditEngineer','EngineerController@EditEm');
Route::post('/AddEngineerController',array('uses' =>'EngineerController@AddEngineer'));

Route::get('/ProjectManagement','ProjectController@IndexPro');
Route::get('/AddProject','ProjectController@AddPro');
Route::post('/AddProject','ProjectController@postAddPro');

Route::get('/EditProject','ProjectController@EditPro');
Route::get('/EditProject/{idProject}','ProjectController@EditPro');
Route::post('/EditProject/{idProject}','ProjectController@postEditPro');
Route::get('DelProject/{id}','ProjectController@DelPro');


Route::get('/totalEngineer', 'ShowEngiDashboardController@ShowEngineer');
Route::get('/totalTeam', 'ShowTeamDashboardController@ShowTeam');
Route::get('/totalProject', 'ShowProjDashboardController@ShowProject');
Route::get('/tableTopEngineer', 'ShowTopEngineerController@ShowTopEngineer');


Route::get('TeamManagement','TeamController@IndexTm');
Route::get('AddTeam','TeamController@AddTm');
Route::post('AddTeamController','TeamController@AddTeam');
Route::get('EditTeam','TeamController@EditTm');
Route::get('EditTeam/{id}','TeamController@EditTm');
Route::post('EditTeam/{id}','TeamController@EditTeam');
//Route::post('EditTeamController','TeamController@EditTeam');
Route::get('DelTeam/{id}','TeamController@DelTm');

Route::get('/checkDB', function ()
{
    dd(DB::connection()->getDatabaseName());
});

Auth::routes();
//Route::get('reset','Auth\ResetPasswordController@showLinkRequest');

