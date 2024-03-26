<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);

Route::add('GET', '/add_doctor', [Controller\Site::class, 'add_doctor'])->middleware('auth');
Route::add('GET', '/add_employee', [Controller\Site::class, 'add_employee'])->middleware('auth');
Route::add('GET', '/add_patient', [Controller\Site::class, 'add_patient'])->middleware('auth');
Route::add('GET', '/add_record', [Controller\Site::class, 'add_record'])->middleware('auth');
Route::add('GET', '/list_doctor', [Controller\Site::class, 'list_doctor'])->middleware('auth');
Route::add('GET', '/list_patient', [Controller\Site::class, 'list_patient'])->middleware('auth');
Route::add('GET', '/list_record', [Controller\Site::class, 'list_record'])->middleware('auth');
Route::add('GET', '/main_admin', [Controller\Site::class, 'main_admin'])->middleware('auth');
Route::add('GET', '/main_employee', [Controller\Site::class, 'main_employee'])->middleware('auth');
Route::add('GET', '/profile', [Controller\Site::class, 'profile'])->middleware('auth');
Route::add('GET', '/scan_doctor', [Controller\Site::class, 'scan_doctor'])->middleware('auth');
Route::add('GET', '/scan_patient', [Controller\Site::class, 'scan_patient'])->middleware('auth');
