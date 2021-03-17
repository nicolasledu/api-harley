<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/infos','App\Http\Controllers\InfoController@show');
Route::post('/reservation','App\Http\Controllers\ApiReservationController@create');

Route::get('annulation/{token}','App\Http\Controllers\ApiAnnulationController@show');
