<?php
use App\Events\UserHasRegistred;

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
Route::get('/',["middleware" =>"auth" , "uses" => 'mainController@home']);
Route::get('reports',['middleware' => 'auth', 'uses' =>  'mainController@index']);// si esta autenticado no puede acceder
Route::get('reports/create', ["middleware" => "auth" , "uses" => 'mainController@create']);// si esta autenticado no puede acceder
Route::get('reports/show/{id}',["middleware" =>"auth" , "uses" => 'mainController@show']);
Route::post('reports/store', 'mainController@store');
Route::get('reports/destroy/{id}' , 'mainController@destroy');
Route::get('reports/vueGetRequest',["middleware" =>"auth" , "uses" => 'mainController@vueGetRequest']);



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);






// Donde vemos si broadcast es exitoso
get('/difusion' , function(){
	// vista donde mostrar los mensajes
	return view('pages.events');
});

/*// Difundir
get('difundir'  , function(){
	//Creamos el evento a difundir
	event(new UserHasRegistred('Cheikh Ndiaye'));
});*/

post('reports'  , function(){
	//App\Message::create($data);
	return 'hello';
});




