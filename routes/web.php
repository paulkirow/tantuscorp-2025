<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.index');
Route::view('/about', 'pages.about-us');
Route::view('/contact', 'pages.contact');

Route::view('/products', 'pages.products.overview');
Route::view('/portables', 'pages.products.portables');
Route::view('/chillers', 'pages.products.central-chillers');
Route::view('/pumps_and_reservoirs', 'pages.products.pumps');
Route::view('/tower', 'pages.products.tower');
Route::view('/temperature_control_units', 'pages.products.temperature-control-units');
Route::view('/accessories', 'pages.products.accessories');


Route::view('/cooling_load_analysis', 'pages.solutions.cooling-load-analysis');
Route::view('/trouble_shooting', 'pages.solutions.trouble-shooting');
Route::view('/energy_audits', 'pages.solutions.energy-audits');
Route::view('/free_cooling', 'pages.solutions.free-cooling');
Route::view('/installation_and_startup', 'pages.solutions.installation-and-startup');
