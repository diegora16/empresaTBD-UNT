<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/proyectos', function () {
    return view('proyectos');
});

Route::get('/clientes', function () {
    return view('clientes');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contacto', function () {
    return view('contacto');
});
