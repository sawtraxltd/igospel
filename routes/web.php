<?php

use App\Models\WebinarDay;
use App\Models\WebinarSession;
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
    return view('index')
        ->withDays(WebinarDay::all())
        ->withSessions(WebinarSession::all());
})->name('landing');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('webinar','WebinarsController');
