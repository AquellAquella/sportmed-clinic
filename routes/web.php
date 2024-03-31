<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PacientesController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\TratamientosController;

Route::get('/', function () {
    $page_title = "Inicio";
    return view('welcome', compact('page_title'));
}) -> name('inicio') ;

Route::get('/cadera_lumbar', function () {
    $page_title = "Cadera - Lumbar";
    return view('cadera_lumbar', compact('page_title'));
}) -> name('cadera_lumbar');

Route::get('/hombro_cervical', function () {
    $page_title = "Hombro - Cervical";
    return view('hombro_cervical', compact('page_title'));
}) -> name('hombro_cervical');

Route::get('/muslo', function () {
    $page_title = "Muslo";
    return view('muslo', compact('page_title'));
}) -> name('muslo');

Route::get('/otros', function () {
    $page_title = "Otros";
    return view('otros', compact('page_title'));
}) -> name('otros');

Route::get('/rodilla', function () {
    $page_title = "Rodilla";
    return view('rodilla', compact('page_title'));
}) -> name('rodilla');

Route::resource('pacientes', PacientesController::class);
Route::resource('servicios', ServiciosController::class);
Route::resource('tratamientos', TratamientosController::class);