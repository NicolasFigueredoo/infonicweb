<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
})->middleware('setlocale');

Route::get('/sitemap.xml', function () {
    $content = view('sitemap')->render();
    return response($content, 200)->header('Content-Type', 'application/xml');
});


Route::post('/contacto/enviar', [ContactController::class, 'send'])->name('contact.send');

Route::get('/lang/{locale}', function ($locale) {
    $supported = ['es', 'en', 'pt'];
    if (in_array($locale, $supported)) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('lang.switch');
