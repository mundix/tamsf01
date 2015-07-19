<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',['as' => 'home','uses' => 'HomeController@index']);

/**
 * Segmento para los buscadores Candiadtes, el cual tendra un controller llamado
 * Candidates y apunte al meotdo de category()
 * @param String $slug
 * @param Int $id
 * @return View
 * Esta seria l URL de la categoria
 *
 * candidates/backend-developer/1
 *
*/
Route::get('candidates/{slug}/{id}',['as' => 'category','uses' => 'CandidatesController@category']);

/**
 * la ruta para un candidate seria
 * edmundo-pichardo/1
*/
Route::get('{slug}/{id}',['as' => 'category', 'uses' => 'CandidatesController@show']);