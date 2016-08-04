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
Route::post('/login', 'Auth\AuthController@authenticate');
Route::get('/admin/logout', 'Auth\AuthController@logout');

// Halaman pengurusan admin
Route::group( ['prefix' => 'admin'], function() {

  // Pengurusan staff
  Route::get('/staff', 'StaffController@index');
  Route::get('/staff/create', 'StaffController@create');
  Route::post('/staff/create', 'StaffController@store');
  Route::get('/staff/{id}', 'StaffController@show');
  Route::get('/staff/{id}/delete', 'StaffController@destroy');
  Route::get('/staff/{id}/edit', 'StaffController@edit');
  Route::patch('/staff/{id}/edit', 'StaffController@update');



  //
  Route::get('/', 'PageController@admin');
  Route::get('/dashboard', 'PageController@dashboard');

  Route::get('/pengadu', 'PengaduController@index');
  Route::get('/aduan', 'BorangController@aduan');
  Route::post('/aduan', 'BorangController@hantarAduan');

  Route::get('/pengadu/{id}', 'PengaduController@show');
  Route::get('/aduan/{id}', 'AduanController@show');

}); // Tutup kepada Route::group()
