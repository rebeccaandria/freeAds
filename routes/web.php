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
    return view('welcome');
})->name('welcome');

//Route::resource('user', 'Utilisateur');
Auth::routes(['verify' => true]);

Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/accueil', 'IndexController@showIndex')->name('accueil');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users', 'CrudController');
Route::get('users/{user}/destroy', 'CrudController@destroyForm');
//Edit Mot de passe
Route::get('editpassword','EditPasswordController@index');
Route::post('editpassword', 'EditPasswordController@store')->name('editpassword');
//ANNONCE
Route::get('/annonce', 'AnnonceController@createAd')->name('ad.createAd');
Route::post('/annonce/create', 'AnnonceController@store')->name('ad.store');
Route::get('/annonces', 'AnnonceController@index')->name('ad.index');
//search bar
Route::get('/search', 'AnnonceController@search')->name('ad.search');