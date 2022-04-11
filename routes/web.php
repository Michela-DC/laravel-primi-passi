<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', ['title' => 'Hello World!']);
})-> name('home');

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/about', function () {
    return view('about', ['title_about' => 'Hi, I\'m Michela!']);
})-> name('about');

Route::get('/projects', function () {
    return view('projects', ['title_projects' => 'Check my projects here:']);
})-> name('projects');

Route::get('/contacts', function () {
    return view('contacts', [
        'title1_contacts' => 'Contact me:',
        'title2_contacts' => 'Or you can find me here:'
    ]);
})-> name('contacts');







