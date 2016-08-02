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
