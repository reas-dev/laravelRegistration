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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('/seminar/register','ParticipantController@store');
Route::get('/upload/{uploadId}', 'ParticipantController@showUploadProfile');
Route::post('/upload/{uploadId}', 'ParticipantController@uploadProfile');

Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function(){
    Route::get('/','AdminController@home');
    Route::get('/lunasin','AdminController@viewLunasin');
    Route::get('/hapus-gambar','AdminController@viewHapusGambar');
    Route::get('/hapus-peserta','ParticipantController@viewDestroy');
    Route::post('/paidChecked/{participantId}','AdminController@lunasin');
    Route::post('/imageRemove/{participantId}','AdminController@hapusGambar');
    Route::delete('/hapus-peserta/{participantId}','ParticipantController@destroy');
    Route::group(['prefix' => 'the-day'], function (){
        Route::get('/', 'AdminController@viewAbsent');
        Route::get('/absent', 'AdminController@viewAbsent');
        Route::get('/certified', 'AdminController@viewCertified');
        Route::post('/absent/{postId}', 'AdminController@absentBackup');
        Route::post('/certified/{postId}', 'AdminController@certifiedBackup');
    });
    Route::group(['prefix' => 'QRScanner'], function(){
        Route::get('/absent','AdminController@absent');
        Route::get('/certified','AdminController@certified');
        Route::post('qrLogin', 'QrLoginController@checkUser');
        Route::get('absent/{postId}', 'AdminController@QrAttend')/**->middleware('auth')*/;
        Route::get('certified/{postId}', 'AdminController@QrCertified')/**->middleware('auth')*/;
    });
});

Route::post('/qr-absent', ['uses' => 'AdminController@QrAbsent']);
Route::post('/qr-certified', ['uses' => 'AdminController@QrAbsent']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout');
