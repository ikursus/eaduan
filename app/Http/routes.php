<?php

// Paparkan halaman homepage
Route::get('/', function() {

  $page_title = 'Utama';

  // Response return text
  //return 'Halaman Homepage';

  // Response return template homepage
  // function view() berfungsi cari folder resources/views
  return view('homepage', compact('page_title') );

});

// Paparkan halaman borang aduan
Route::get('/borang-aduan', function() {

  $page_title = 'Borang Aduan';

  return view('borang-aduan', compact('page_title') );

});

// Paparkan halaman terima kasih
Route::get('/terima-kasih', function() {

  $page_title = 'Terima Kasih';

  return view('terima-kasih', compact('page_title') );

});

Route::get('/login', function() {

  $page_title = 'Login Admin';

  return view('login', compact('page_title') );

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

}); // Tutup kepada Route::group()
