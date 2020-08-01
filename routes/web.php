<?php

Route::get('/', 'FrontendController@index');
Route::get('/about', 'FrontendController@about');
Route::get('/package', 'FrontendController@package');
Route::get('/features', 'FrontendController@features');
Route::get('/contact', 'FrontendController@contact');
Route::get('/blog', 'FrontendController@blog');


Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth','admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    // Permissions
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::resource('roles', 'RolesController');

    Route::resource('categories', 'CategoriesController');

    // Users
    Route::resource('users', 'UsersController'); 

});
Route::get('/payment', 'PaymentController@index');

// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');

// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');
     