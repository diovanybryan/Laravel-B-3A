<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cetak', function() {
	return 'Hello World!';
});

Route::get('/nama/{name}/{age}', function($name, $age) {
	return 'Nama saya adalah '.$name.' berusia '.$age;
});

Route::get('/SPRINT-Pegadaian-kelas-B', function() {
	return 'Semangat!';
})->name('PegB');

Route::get('/test', function() {
	return redirect()->Route('PegB');
});

/*Route Myusers*/
Route::get('/create', function() {
	return view('users.create');
});

Route::get('/show', 'MyuserController@Tampil')->name('show');
Route::post('/adduser', 'MyuserController@Simpan');
Route::get('/hapus/{id}', 'MyuserController@Hapus');

/*End Route Myusers*/

/*Route Contacts*/
Route::get('/createcontact', function() {
	return view('contacts.create');
});

Route::get('/showcontact', 'ContactController@Tampil')->name('showcontact');
Route::post('/savecontact', 'ContactController@Simpan');
/*End Route Contacts*/