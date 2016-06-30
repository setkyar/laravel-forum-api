<?php

Route::group(['middleware' => ['api']], function() {

	Route::post('/auth/signup', [
		'uses'	=> 'AuthController@signUp'
	]);

	Route::post('/auth/signin', [
		'uses'	=> 'AuthController@signin'
	]);

	Route::get('/sections', [
		'uses'	=> 'Forum\SectionController@index'
	]);

	Route::group(['middleware' => 'jwt.auth'], function() {
		
		Route::get('/user', [
			'uses'	=> 'UserController@index'
		]);

	});

});