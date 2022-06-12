<?php

use App\Http\Controllers\createMessage;
use App\Http\Controllers\inbox;
use App\Http\Controllers\sent;
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
    return redirect('/inbox');
});

Route::get('/create', [createMessage::class, 'form']);

Route::post('/create', [createMessage::class, 'send']);

Route::get('/inbox', [inbox::class, 'index']);

Route::get('/inbox/{id}/show', [inbox::class, 'show']);

Route::get('/sent', [sent::class, 'index']);

Route::get('/sent/{id}/show', [sent::class, 'show']);
