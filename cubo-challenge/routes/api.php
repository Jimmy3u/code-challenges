<?php

use App\Http\Controllers\contribApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('contrib/all', [contribApi::class, 'listContrib']);
Route::post('contrib', [contribApi::class, 'createContrib']);
Route::delete('contrib/del/{id}', [contribApi::class, 'delContrib']);
Route::put('contrib/upd/{id}', [contribApi::class, 'updContrib']);
