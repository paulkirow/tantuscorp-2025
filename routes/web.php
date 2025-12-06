<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.index');
Route::view('/contact', 'pages.contact');

Route::view('/products', 'pages.products.overview');
Route::view('/portables', 'pages.products.portables');
Route::view('/chillers', 'pages.products.central-chillers');
Route::view('/pumps-and-reservoirs', 'pages.products.pumps');
Route::view('/tower', 'pages.products.tower');
Route::view('/temperature-control-units', 'pages.products.temperature-control-units');
Route::view('/accessories', 'pages.products.accessories');

Route::view('/cooling-load-analysis', 'pages.solutions.cooling-load-analysis');
Route::view('/troubleshooting', 'pages.solutions.trouble-shooting');
Route::view('/energy-audits', 'pages.solutions.energy-audits');
Route::view('/free-cooling', 'pages.solutions.free-cooling');
Route::view('/installation-and-startup', 'pages.solutions.installation-and-startup');
