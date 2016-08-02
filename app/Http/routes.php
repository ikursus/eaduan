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

    $page_title = 'Dashboard Admin';

    // View akan cari template dashboard dalam resources/views/admin
    return view('admin/dashboard', compact('page_title') );

  });

  Route::get('/staff', function() {

    $page_title = 'Senarai Staff';

    // View akan cari template dashboard dalam resources/views/admin
    return view('admin/staff', compact('page_title') );

  });

  Route::get('/pengadu', function() {

    $page_title = 'Senarai Pengadu';

    // View akan cari template dashboard dalam resources/views/admin
    return view('admin/pengadu', compact('page_title') );

  });

  Route::get('/aduan', function() {

    $page_title = 'Senarai Aduan';

    // View akan cari template dashboard dalam resources/views/admin
    return view('admin/aduan', compact('page_title') );

  });

  Route::get('/logout', function() {

    return 'Halaman logout';

  });

  Route::get('/staff/{id}', function($id) {

    $page_title = 'Maklumat Staff';

    // View akan cari template dashboard dalam resources/views/admin
    return view('admin/staff-detail', compact('page_title') );

  });

  Route::get('/pengadu/{id}', function($id) {

    $page_title = 'Maklumat Pengadu';

    // View akan cari template dashboard dalam resources/views/admin
    return view('admin/pengadu-detail', compact('page_title') );

  });

  Route::get('/aduan/{id}', function($id) {

    $page_title = 'Maklumat Aduan';

    // View akan cari template dashboard dalam resources/views/admin
    return view('admin/aduan-detail', compact('page_title') );

  });

}); // Tutup kepada Route::group()
