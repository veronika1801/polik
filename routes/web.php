<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup'])->middleware('auth', 'admin');
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);

Route::add(['GET', 'POST'], '/add_doctor', [Controller\Site::class, 'add_doctor'])->middleware('auth', 'employee');
Route::add(['GET', 'POST'], '/add_patient', [Controller\Site::class, 'add_patient'])->middleware('auth', 'employee');
Route::add(['GET', 'POST'], '/add_record', [Controller\Site::class, 'add_record'])->middleware('auth', 'employee');
Route::add('GET', '/list_doctor', [Controller\Site::class, 'list_doctor'])->middleware('auth');
Route::add('GET', '/list_patient', [Controller\Site::class, 'list_patient'])->middleware('auth');
Route::add('GET', '/list_record', [Controller\Site::class, 'list_record'])->middleware('auth');
Route::add('GET', '/home', [Controller\Site::class, 'home'])->middleware('auth');
Route::add('GET', '/profile', [Controller\Site::class, 'profile'])->middleware('auth');
Route::add('GET', '/scan_doctor', [Controller\Site::class, 'scan_doctor'])->middleware('auth');
Route::add('GET', '/scan_patient', [Controller\Site::class, 'scan_patient'])->middleware('auth');


