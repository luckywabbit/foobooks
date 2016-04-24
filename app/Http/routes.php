<?php

Route::group(['middleware' => ['web']], function () {




/*    Route::get('/', function () {
        return view('welcome');
    });*/
	
/*	Route::get('/', function () {
    return view('welcome');
	});*/
	
	Route::get('/', 'BookController@getIndex');
	
	
	# ------------------------------------
	# Practice routes
	# ------------------------------------
	for($i = 0; $i <= 100; $i++) {
		Route::get("/practice/ex".$i, "PracticeController@getEx".$i);
	}
	
	
	
	

    Route::get('/books', 'BookController@getIndex');
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
	
	
	
	Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});

});
