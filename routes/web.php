<?php



Route::get('/', 'FrontendController@index')->name('/');
Route::get('/courses', 'FrontendController@courses')->name('courses');
Route::get('/about_sunandaji', 'FrontendController@aboutsunandaji')->name('aboutsunandaji');
Route::get('/about_swamiji', 'FrontendController@about_swamiji')->name('about_swamiji');
Route::get('/event', 'FrontendController@event')->name('event');
Route::get('/media', 'FrontendController@media')->name('media');
Route::get('/vedanta', 'FrontendController@vedanta')->name('vedanta');


Auth::routes();


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth','admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    // Permissions
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::resource('roles', 'RolesController');

    Route::resource('institutions', 'InstitutionController');

    Route::resource('corporate_bodies', 'Corporate_bodiesController');

    Route::resource('categories', 'CategoriesController');

    // Users
    Route::resource('users', 'UsersController'); 

    //Pages
    Route::resource('pages', 'PagesettingController'); 
   
    // Event
    Route::resource('events', 'EventsController');

    // Media
    Route::resource('media', 'MediaController');
    Route::resource('testimonials', 'TestimonialsController');

    //Homepage
    Route::get('manage_homepage', 'PagesController@index')->name('homepage');
    
    Route::Post('manage_homepage/update/{id}', 'PagesController@update')->name('homepage.update');

     
    Route::get('about_vedanta', 'PagesController@about_vedanta')->name('about.vedanta');

    Route::Post('about_vedanta/update/{id}', 'PagesController@vedanta_update')->name('vedanta.update');
   
    Route::get('about_sunandaji', 'PagesController@about_sunandaji')->name('about.sunandaji');

    Route::Post('about_sunandaji/update/{id}', 'PagesController@about_sunandaji_update')->name('sunandaji.update');
    
    Route::get('about_swamiji', 'PagesController@about_swamiji')->name('about.swamiji');

    Route::Post('about_swamiji/update/{id}', 'PagesController@about_swamiji_update')->name('swamiji.update');
    
    Route::get('about_media', 'PagesController@about_media')->name('about.media');

    Route::Post('about_media/update/{id}', 'PagesController@about_media_update')->name('media.update');
   
    Route::get('about_events', 'PagesController@event')->name('about.events');

    Route::Post('about_events/update/{id}', 'PagesController@about_event_update')->name('event.update');
   
    Route::get('courses', 'PagesController@courses')->name('courses');

    Route::Post('courses/update/{id}', 'PagesController@courses_update')->name('courses.update');

});
Route::get('pages/{id}', 'FrontendController@show')->name('pages.show'); 
Route::get('/payment', 'PaymentController@index');

// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');

// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');
     