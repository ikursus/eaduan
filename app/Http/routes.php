<?php

// Paparkan halaman homepage
Route::get('/', function() {

  // Response return text
  //return 'Halaman Homepage';

  // Response return template homepage
  // view() cari folder resources/views
  return view('homepage');

});

// Paparkan halaman borang aduan
Route::get('/borang-aduan', function() {

  return view('borang-aduan');

});

// Paparkan halaman terima kasih
Route::get('/terima-kasih', function() {

  return 'Halaman Terima Kasih';

});

// Halaman admin

Route::get('/login', function() {

  return view('login');

});

// Halaman pengurusan admin
Route::group( ['prefix' => 'admin'], function() {

  Route::get('/', function() {

    return redirect('/admin/dashboard');

  });

  Route::get('/dashboard', function() {

    return 'Halaman dashboard';

  });

  Route::get('/staff', function() {

    return 'Halaman Senarai Staff';

  });

  Route::get('/pengadu', function() {

    return 'Halaman senarai pengadu';

  });

  Route::get('/aduan', function() {

    return 'Halaman senarai aduan';

  });

  Route::get('/logout', function() {

    return 'Halaman logout';

  });

  Route::get('/staff/{id}', function($id) {

    return view('homepage', compact('id'));

  });

  Route::get('/pengadu/{id}', function($id) {

    return 'Halaman maklumat pengadu';

  });

  Route::get('/aduan/{id}', function($id) {

    return 'Halaman maklumat aduan';

  });

});
