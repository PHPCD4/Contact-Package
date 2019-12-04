<?php 

use Illuminate\Http\Request;

Route::namespace('Sorwar\Contact\Http\Controllers')->group(function () {

    Route::get('contact', 'ContactController@index')->name('contact');
	Route::post('contact', 'ContactController@send')->name('contact');
	
});

