<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| User Connection Routes
|--------------------------------------------------------------------------
|
| Here is where you can register User Connection routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "User Connection" middleware group. Now create something great!
|
*/

//------------------------------------------- Suggestion Related Routes----------------------------------------------------------------
Route::post('/sendRequest', [App\Http\Controllers\HomeController::class, 'sendRequest'])->name('send-request'); //Send Request
Route::get('/getSuggestions', [App\Http\Controllers\HomeController::class, 'getSuggestions'])->name('get-suggestions'); //Get Suggestions
Route::get('/getRequests/{mode}', [App\Http\Controllers\HomeController::class, 'getRequests'])->name('get-requests'); //Get Sent Requests

//------------------------------------------- Request Related Routes------------------------------------------------------------------
Route::post('/deleteRequest', [App\Http\Controllers\HomeController::class, 'deleteRequest'])->name('delete-request'); //Delete Request
Route::post('/acceptRequest', [App\Http\Controllers\HomeController::class, 'acceptRequest'])->name('accept-request'); //Accept Request

//------------------------------------------- Connection Related Routes------------------------------------------------------------------
Route::get('/getConnections', [App\Http\Controllers\HomeController::class, 'getConnections'])->name('get-connections'); //Get Connections
Route::get('/removeConnection/{connection}', [App\Http\Controllers\HomeController::class, 'removeConnection'])->name('remove-connection'); //Remove Connections
