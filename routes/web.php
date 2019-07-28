<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/**************************************************************
 * Contact Routes
 * 
 **************************************************************/
// this show the list of all contacts and I used this is the main view for the authenticated user
Route::get('/contacts', 'HomeController@index')->name('contact');

// this redirects the user to the create view
Route::get('/contact/new', 'ContactController@create')->name('contact.create');

// this is the command used to save the contact information
Route::post('/contact/create', 'ContactController@store');

/**
 * The folllwing commands are the ones used for the VueJs side
 * put & delete are used to update & delete a contact by id
 */
Route::delete('/api/deleteContact/{id}', 'ContactController@destroy');
Route::put('/api/updateContact/{id}', 'ContactController@update');

 // Lists all contacts
Route::get('/api/auth/contacts', 'ContactController@index')->name('contacts.all');

// Confirms the contact information
Route::get('/api/confirmuser/{id}', 'ContactController@confirmUser')->name('confirm.user');


/**************************************************************
 * User profile routes
 **************************************************************/
Route::get('/profile/edit', 'UserController@edit')->name('profile.edit');
Route::put('/profile/{id}/update', 'UserController@update')->name('profile.update');


/**************************************************************
 * This route is used in the front
 *  for when a notification is to be sent to all users
 * 
 * Alternatively, you can type the command via prompt: php artisan send:emails 
 **************************************************************/

Route::get('notify/users', function(){
    Artisan::call('notify:users');
    return redirect()->back()->with(['message' => 'Database notification Sent']);

})->name('send.email');



                
