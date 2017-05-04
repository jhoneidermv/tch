<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    if(Auth::check()){
        if (Auth::user()->rol =="admin"){
            return view('admin/index');
        }else
            return view('user/juego/index');
    }else{
        return view('auth/login');
    }
});


/*
 * *Indica que cualquier persona puede acceder a las rutas del auth
 */

   Route::auth();


/*
 * Son las lrutas que solo va  a controlar el adminitrador
 */
Route::group([ 'middleware' => ['auth', 'throttle:30'], 'prefix' => 'admin'], function (){
    Route::get('/',[
       'as'  => 'admin.index',
        function(){
            return view('admin/index');
        }
    ]);
    Route::resource('excel','ExcelController');
    Route::get('admin/excel/export', ['uses' => 'ExcelController@getExport', 'as' => 'admin.excel.getExport']);

    Route::resource('users','UsersController');
    Route::post('users/{id}/update', ['uses' =>  'UsersController@update','as' => 'admin.user.update']);
    Route::get('users/{id}/destroy', ['uses' => 'UsersController@destroy', 'as' => 'admin.user.destroy']);

});

/*
 * Son las lrutas que solo va  a controlar el adminitrador
 */
Route::group([ 'middleware' => ['auth', 'throttle:30'], 'prefix' => 'user'], function (){
    Route::get('/',[
        'as'  => 'user.index',
        function(){
            return view('user/index');
        }
    ]);

    Route::resource('juego','JuegoController');
    Route::get('user/juego/start', ['uses' => 'JuegoController@start', 'as' => 'user.juego.start']);
    Route::get('user/juego/start11', ['uses' => 'JuegoController@start11', 'as' => 'user.juego.start11']);
    Route::get('user/juego/start12', ['uses' => 'JuegoController@start12', 'as' => 'user.juego.start12']);
    Route::get('user/juego/start2', ['uses' => 'JuegoController@start2', 'as' => 'user.juego.start2']);
    Route::get('user/juego/start21', ['uses' => 'JuegoController@start21', 'as' => 'user.juego.start21']);
    Route::get('user/juego/start3', ['uses' => 'JuegoController@start3', 'as' => 'user.juego.start3']);
    Route::get('user/juego/start4', ['uses' => 'JuegoController@start4', 'as' => 'user.juego.start4']);
    Route::get('user/juego/start5', ['uses' => 'JuegoController@start5', 'as' => 'user.juego.start5']);
    Route::get('user/juego/start61', ['uses' => 'JuegoController@start61', 'as' => 'user.juego.start61']);
    Route::get('user/juego/start62', ['uses' => 'JuegoController@start62', 'as' => 'user.juego.start62']);
    Route::get('user/juego/start7', ['uses' => 'JuegoController@start7', 'as' => 'user.juego.start7']);
    Route::get('user/juego/start8', ['uses' => 'JuegoController@start8', 'as' => 'user.juego.start8']);
    Route::get('user/juego/start91', ['uses' => 'JuegoController@start91', 'as' => 'user.juego.start91']);
    Route::get('user/juego/start92', ['uses' => 'JuegoController@start92', 'as' => 'user.juego.start92']);




});