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


Route::get('/verantwoord_ai', function () {
    return view('verantwoord_ai');
});


Route::get('/initiatief', function () {
    return view('initiatief');
});


Route::get('/agenda', function () {
    return view('agenda');
});


Route::get('/event', function () {
    return view('event_inspiratiedag');
});

Route::get('/programma/kennis', function () {
    return view('programma_kennis_vaardigheiden');
});

Route::get('/programma/actie', function () {
    return view('programma_actie_onderzoek');
});

Route::get('/programma/faciliteit', function () {
    return view('programma_faciliteit_lab');
});


use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'sendContact'])->name('contact.send');


use Illuminate\Support\Facades\Mail;

Route::get('/mailtest', function () {
    Mail::raw('Dit is een test', function ($message) {
        $message->to('wesselvanos2004@gmail.com')
            ->subject('Test e-mail');
    });

    return 'Mail verstuurd!';
});

