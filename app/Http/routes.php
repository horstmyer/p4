<?php


// home page, show login
Route::get('/', 'IndexController@getIndex');

// Show Signup/Register
Route::get('/register', 'Auth\AuthController@getRegister');

// Process Signup/Register
Route::post('/register', 'Auth\AuthController@postRegister');

// Process login form
Route::post('/login', 'Auth\AuthController@postLogin');


    // Show Profile
    Route::get('/profile', 'ProfilesController@getIndex');
    Route::post('/profile', 'ProfilesController@postProfile');

    // Process logout
    Route::get('/logout', 'Auth\AuthController@getLogout');

    //edit pet
    Route::get('/profile/edit/{id?}', 'ProfilesController@getEdit');
    //process edit pet
    Route::post('/profile/edit', 'ProfilesController@postEdit');

    //delete pet
    Route::get('/profile/confirm-delete/{id?}', 'ProfilesController@getConfirmDelete');
    //process delete pet
    Route::get('/profile/delete/{id?}', 'ProfilesController@getDoDelete');

    //add a pet
    Route::get('profile/addpet', 'ProfilesController@getAddPet');
    //process a pet
    Route::post('profile/addpet', 'ProfilesController@postPet');

    //  Missing
    Route::get('/missing/{id?}', 'MissingController@flyer');


Route::get('/confirm-login-worked', function() {
    # You may access the authenticated user via the Auth facade
    $user = Auth::user();
    if($user) {
        echo 'You are logged in.';
        dump($user->toArray());
    } else {
        echo 'You are not logged in.';
    }
    return;
});

if(App::environment('local')) {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('/drop', function() {
        DB::statement('DROP database msccpets');
        DB::statement('CREATE database msccpets');
        return 'Dropped msccpets; created msccpets.';
    });
};



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
