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
    return view('welcome');
});
Route::get('task', function () {
    $tasks = [
        'task1',
        'task2',
        'task3'
    ];
    return view('task', compact('tasks'));
});
Route::get('show/{id}', function ($id) {
    $tasks = [
        'task1',
        'task2',
        'task3'
    ];
    $task = $tasks[$id];
    return view('show', compact('task'));
});
