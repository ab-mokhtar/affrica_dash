<?php

use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Route;
use Tymon\JWTAuth\Contracts\Providers\Auth;

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



FacadesAuth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth','admin']], function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/registre','UserController@user');
    
    Route::post('/newuser','UserController@create');
    Route::post('/newuser','UserController@store');
    Route::put('/user/{id}/','UserController@userupdateEtat');
    Route::get('/newuser', function () {
        return view('admin.newuser');
    });
    //Route::get('player/{id}','DeclaCOntroller@playerById');
    Route::get('/decla', 'DeclaCOntroller@decla');
  
    Route::put('/decla/{id}/{idag}','DeclaCOntroller@declaupdateEtat');
    Route::get('/declaeff', 'DeclaCOntroller@declaeffec');
    
    
});
Route::group(['middleware' => ['auth','normal']], function(){
    Route::get('/dashboardnor', function () {
        return view('normal.dashboard');
    });
    Route::get('/users','UserController@users');
    Route::get('/declanor', 'DeclaCOntroller@declanor');
  
    Route::put('/declanor/{id}/{idag}','DeclaCOntroller@declaupdateEtatnor');
    Route::get('/declaeffnor', 'DeclaCOntroller@declaeffecnor');

 });
Route::get('/home', 'HomeController@index')->name('home');
