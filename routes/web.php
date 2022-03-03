<?php

use App\Http\Controllers\Test;
use Illuminate\Support\Facades\Route;
use App\PaymentFacade as payment;

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
    //return view('welcome');
    return payment::process();
});
Route::get('test', [Test::class, 'index']);

/*Route::namespace('Web')->group(function(){
   Route::resource('teams', 'TeamController');
});
*/

Route::group(['namespace' => 'Web', 'prefix' => 'teams'], function () {
    Route::resource('teams', 'TeamsController');
});
