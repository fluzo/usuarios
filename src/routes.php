<?php

Route::get('login', array('as' => 'login', 'uses' => 'LoginController@formulario'));
Route::post('login', 'LoginController@login', array('before' => 'csrf'));
Route::get('logout',array('as' => 'logout', 'uses' => 'LoginController@logout'));
