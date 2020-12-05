<?php

use Illuminate\Http\Request;
use App\Http\Requests ;

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
Route::get('/material','MaterialController@getMaterial');
Route::post('/material','MaterialController@addMaterial');
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');
