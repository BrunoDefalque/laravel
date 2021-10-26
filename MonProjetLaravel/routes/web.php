<?php

use App\Http\Controllers\PersonController;

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
    //phpinfos();
	return view('welcome');
});
Route::get('/toto', function(){
	return "Bienvenue toto";
  });
 /* Route::get('/jeu', function () {
    return view('Games');
});
*/
Route::view('/jeu','Games');






Route::get('Hi', [PersonController::class, 'hi']);

Route::get('users/Hi/{name}', [PersonController::class, 'hi'])->where('name','[A-z]+');


Route::get('users/List', [PersonController::class, 'getUsersList']);
Route::get('users/SearchByName/{name}', [PersonController::class, 'getUsersByName']);
Route::get('users/SearchByFirstname/{firstname}', [PersonController::class, 'getUsersByFirstname']);
Route::get('users/SearchBySomehting/{thing}', [PersonController::class, 'getUsersBySomething']);

Route::get('bonjour/{n}', [PersonController::class, 'hi'])->where('n','[A-z]+')->name("HelloYou");


Route::get('search',function () {
	return view('search');
});

Route::post('users', [PersonController::class, 'searchForm']);