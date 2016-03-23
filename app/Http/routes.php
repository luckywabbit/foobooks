<?php

Route::group(['middleware' => ['web']], function () {




/*    Route::get('/', function () {
        return view('welcome');
    });*/

    //Route::get('/books', 'BookController@getIndex');
	Route::get('/', 'BookController@getIndex');
    Route::get('/book/create', 'BookController@getCreate');
    Route::post('/book/create', 'BookController@postCreate');
    Route::get('/book/show/{title?}', 'BookController@getShow');

    Route::get('/practice', function() {
        $random = new Random();
        return $random->getRandomString(10);
    });

    # Restrict certain routes to only be viewable in the local environments
    if(App::environment('local')) {
        Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    }

});
