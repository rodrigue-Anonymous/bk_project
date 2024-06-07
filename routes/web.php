<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     return view('Accueil');
 });

// Route::get('/', function () {
//     return view('dashbord');
// })->name('dashbord');
