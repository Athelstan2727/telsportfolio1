<?php

use Illuminate\Support\Facades\Route;

// Main Homepage
Route::get('/', function () {
    return view('welcome');
});

// Project Detail Routes
Route::get('/project/contracts-hub', function () {
    return view('projects.contracts-hub');
});

Route::get('/project/ai-rigation', function () {
    return view('projects.ai-rigation');
});

Route::get('/project/tugon-lipa', function () {
    return view('projects.tugon-lipa');
});