<?php

// Paparkan halaman homepage
Route::get('/', function() {

  return 'Halaman Homepage';

});

// Paparkan halaman borang aduan
Route::get('/borang-aduan', function() {

  return 'Borang Aduan Pengguna';

});

// Paparkan halaman terima kasih
Route::get('/terima-kasih', function() {

  return 'Halaman Terima Kasih';

});

// Halaman admin

Route::get('/login', function() {

  return 'Halaman login';

});

// Halaman pengurusan admin
Route::group( ['prefix' => 'admin'], function() {

  Route::get('/', function() {

    return redirect('http://google.com');

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

    return 'Halaman maklumat staff ' . $id;

  });

  Route::get('/pengadu/{id}', function($id) {

    return 'Halaman maklumat pengadu';

  });

  Route::get('/aduan/{id}', function($id) {

    return 'Halaman maklumat aduan';

  });

});
