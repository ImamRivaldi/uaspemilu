<?php

Route::get('', 'PemiluController@index')->name('index');
Route::get('pemilih/create', 'PemiluController@create')->name('create');
Route::post('pemilih/store', 'PemiluController@store')->name('store');
Route::get('pemilih/destroy/{id}', 'PemiluController@destroy')->name('destroy');
Route::get('pemilih/edit/{id}', 'PemiluController@edit')->name('edit');
Route::post('pemilih/update/{id}', 'PemiluController@update')->name('update');
Route::get('contact', 'PemiluController@contact')->name('contact');