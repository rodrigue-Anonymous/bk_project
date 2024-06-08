<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     return view('Accueil');
 });


Route::get('/dashbord_client', function () {
     return view('dashbord_client');
     
 })->name('dashbord_client');

// Route::get('/', function () {
//     return view('Accueil');
// });
