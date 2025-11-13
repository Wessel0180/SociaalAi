<?php

use Illuminate\Support\Facades\Route;

Route::get('/folder', function () {
    return view('folder');
});



Route::get('/', function () {
    return view('index');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/hoogtenpunten', function () {
    return view('hoogtenpunten');
});


Route::get('/informatie', function () {
    return view('informatie');
});


Route::get('/initiatief', function () {
    return view('initiatief');
});


Route::get('/programa', function () {
    return view('programa');
});


Route::get('/', function () {
    return view('index');
});


