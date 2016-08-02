<?php

// Paparkan halaman homepage
// Route::get('/', function() {
//
//   $page_title = 'Utama';
//
//   // Response return text
//   //return 'Halaman Homepage';
//
//   // Response return template homepage
//   // function view() berfungsi cari folder resources/views
//   return view('homepage', compact('page_title') );
//
// });

Route::get('/', 'PageController@homepage');
Route::get('/terima-kasih', 'PageController@tq');
Route::get('/borang-aduan', 'BorangController@index');
Route::get('/login', 'BorangController@login');

// Halaman pengurusan admin
Route::group( ['prefix' => 'admin'], function() {

  Route::get('/', 'PageController@admin');
  Route::get('/dashboard', 'PageController@dashboard');
  Route::get('/staff', 'StaffController@index');
  Route::get('/pengadu', 'PengaduController@index');
  Route::get('/aduan', 'AduanController@index');
  Route::get('/logout', 'AuthController@logout');
  Route::get('/staff/{id}', 'StaffController@show');
  Route::get('/pengadu/{id}', 'PengaduController@show');
  Route::get('/aduan/{id}', 'AduanController@show');

}); // Tutup kepada Route::group()
