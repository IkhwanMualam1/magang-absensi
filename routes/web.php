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

Route::get('/', 'PagesController@index');
// Route::post('login', 'PagesController@login');
Route::group(['middleware' => ['isAdmin']], function () {
    Route::resource('user', 'UserController');
    Route::resource('magang','MagangController');
});
Route::group(['middleware' => ['isSiswa']], function () {
    Route::get('dashboard', 'PagesController@home')->name('dashboard');
    Route::get('absensi', 'AbsensiController@index');
    Route::get('quest', 'QuestController@index');
    Route::get('report', 'ReportController@index');
});


Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
