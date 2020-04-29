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

Route::get('/','PagesController@home')->name('acceuille');
Route::get('/about','PagesController@about')->name('about');
Route::get('/voiture','PagesController@Voiture')->name('Voiture');
Route::get('/Immobilier','PagesController@immobilier')->name('immobilier');
Route::post('/home','PagesController@enregistrerLocation')->name('location');
Route::post('/about','PagesController@enregistrerVoiture')->name('location_voitures');

Route::get('/supprimeri/{id}','PagesController@supprimeri')->name('supprimeri')->middleware('auth');
Route::get('/supprimerv/{id}','PagesController@supprimerv')->name('supprimerv')->middleware('auth');
Route::get('/afficherTout','PagesController@afficherTout')->name('afficherTout')->middleware('auth');

Route::get('/afficherImmobilier/{id}','PagesController@afficherImmobilier')->name('afficherImmobilier');
Route::get('/afficherVoiture/{id}','PagesController@afficherVoiture')->name('afficherVoiture');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(['register'=> false,
              'verify'=> true,
    ]);
