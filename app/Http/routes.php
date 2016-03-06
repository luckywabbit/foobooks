<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

//use \Rych\Random\Random;



Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
    //return view('welcome');
	echo 'Hello World!';
});


/*Route::get('/books', function() {
	return 'Show a list of all books';
});*/

Route::get('/books', 'BookController@getIndex');
Route::get('/book/create', 'BookController@getCreate');
Route::post('/book/create', 'BookController@postCreate');
Route::get('/book/{id}', 'BookController@getShow');

Route::get('/practice', function() {
		//echo config('mail.driver');
		//return 'practice';
		//echo config('app.env') . '<br>';
		//echo config('app.url');
		//echo config('app.debug');
		
		 $random = new Random();
    	return $random->getRandomString(8);

    	//$data = Array('foo' => 'bar');
   		//Debugbar::info($data);
    	//Debugbar::error('Error!');
   		//Debugbar::warning('Watch out…');
    	//Debugbar::addMessage('Another message', 'mylabel');

   	 	//return '';

	});




});




