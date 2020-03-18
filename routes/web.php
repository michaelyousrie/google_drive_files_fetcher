<?php

use App\Helpers\GoogleDrive;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

Route::get('/', 'DriveController@index')
    ->name('index');

Route::get('/store', 'DriveController@store')
    ->name('store');

Route::get('/truncate', 'DriveController@truncate')
    ->name('truncate');
