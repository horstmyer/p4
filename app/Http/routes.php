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
