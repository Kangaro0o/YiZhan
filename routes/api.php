<?php

use Illuminate\Http\Request;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

/*Route::namespace('Admin')->middleware('auth')->group(function () {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});*/

Route::post('/testapi', function () {
    dd(bcrypt(123456));
});


/*
 * 路由前会自动加上 /api/
 * 如 'login' 路由 的 api 为 /api/auth/login
 * */
Route::group([
    'namespace' => 'Admin'
], function () {
    // 登录验证
    Route::post('auth/login', 'AuthController@login');
    Route::post('me', 'AuthController@me');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
});