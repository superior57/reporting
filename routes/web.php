<?php

Route::resource('posts', 'PostController');

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/details_data', ['as' => 'details_data', 'uses' => 'ChartController@index']);
Route::post('/details_data', ['as' => 'details_data', 'uses' => 'ChartController@index']);
Route::get('/search', 'SearchController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users',  'UsersController@index');
Route::get('/users/{id}', 'UsersController@index');
Route::get('/quick_search', 'UsersController@quickSearch');
Route::get('ajaxDelete', 'UsersController@ajax_delete');
Route::post('/usersdiag', 'UsersdiagController@index');


Route::get('/ajax_get_userlist', 'UsersdiagController@ajax_get_userlist');
Route::post('ajaxDelete', 'UsersController@ajax_delete');
Route::get('ajaxDelete', 'UsersController@ajax_delete');


Route::post('ajaxSave', 'UsersController@ajax_save');
Route::post('ajaxUpdate', 'UsersController@ajax_update');

// Account
Route::get('/myaccount', 'UsersdiagController@account');

// record...
Route::get('ajax_get_user_search', 'UsersdiagController@search');
Route::post('ajax_record_save', 'UsersdiagController@ajax_record_save');
Route::get('ajax_get_record', 'UsersdiagController@ajax_get_record');
Route::post('ajax_get_record_edit', 'UsersdiagController@ajax_get_record_edit');
Route::post('ajax_record_seted', 'UsersdiagController@ajax_record_seted');
Route::post('ajas_delete_record', 'UsersdiagController@ajas_delete_record');

// user list
Route::post('ajax_user_seted', 'UsersController@ajax_user_seted');
Route::get('/userlist', 'UsersdiagController@userlist');
Route::get('ajax_get_user', 'UsersController@ajax_get_user');

// search user record
Route::get('/search_userrecord', 'UsersdiagController@search_user_record');
Route::post('ajax_search', 'UsersdiagController@ajax_search');
Route::post('quick_record', 'UsersdiagController@quick_record');

// control panel
Route::get('control', 'UsersdiagController@control');
Route::get('ajax_get_newuser', 'UsersdiagController@ajax_get_newuser');

Route::get('admin445', 'Admin\AdminController@index');
Route::get('admin445/userlist', 'Admin\AdminController@userlist');
Route::get('admin445/newusers', 'Admin\AdminController@newusers');
Route::get('admin445/homepage', 'Admin\AdminController@homepage');
Route::get('ajax_get_post', 'UsersdiagController@ajax_get_post');
Route::post('ajax_save_post', 'UsersdiagController@ajax_save_post');
Route::get('ajax_user_approve', 'UsersController@ajax_user_approve');
Route::post('ajax_record_appeal', 'UsersController@ajax_record_appeal');

Route::post('fileupload', 'UsersdiagController@fileupload');
Route::post('contactus', 'UsersdiagController@contactus');
// Route::get('notapproved', 'UsersdiagController@contactus');

Route::get('mp3-download/{src}', 'UsersdiagController@download_mp3');

