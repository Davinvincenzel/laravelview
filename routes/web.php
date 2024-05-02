<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dosen', function () {
    return view('dosen');
    
});

Route::get('/dosen/index', function () {
    return view('dosen.index');
    
});

//Route::get('/fakultas/index', function () {
  //  return view('fakultas.index', ["ilkom" => "Fakultas ILKOM UMDP"]);
    
//});

// Route::get('/fakultas', function () {
//     return view('fakultas.index', 
//     ["fakultas" => ["Fakultas ILKOM UMDP","Fakultas ILEKON"]]);
    
// });

Route::get('', function () {
    $fakultas = ["Fakultas ILKOM UMDP","Fakultas ILEKON"];
    return view('fakultas.index', compact('fakultas'));
});

