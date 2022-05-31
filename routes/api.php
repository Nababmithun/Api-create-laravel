<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::post('registration', [UserController::class, 'register']);

Route::group([
    'prefix' => 'auth'
],
 function()
 {
   Route::post('login','AuthController@login');
   Route::post('registration','AuthCintroller@register');
 }
);

Route::middleware('auth_api')->get('/user',function(Request $request)
{
  return $request->user();
});
