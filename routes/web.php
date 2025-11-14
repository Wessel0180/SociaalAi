<?php

use Illuminate\Support\Facades\Route;

Route::get('/folder', function () {
    return view('folder');
});



Route::get('/', function () {
    return view('index');
});


Route::get('/over', function () {
    return view('over');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/programma', function () {
    return view('programma');
});


Route::get('/informatie', function () {
    return view('informatie');
});


Route::get('/initiatief', function () {
    return view('initiatief');
});


Route::get('/agenda', function () {
    return view('agenda');
});


Route::get('/', function () {
    return view('index');
});


