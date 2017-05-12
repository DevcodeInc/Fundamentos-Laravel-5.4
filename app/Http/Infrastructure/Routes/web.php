<?php
/**
 * Created by Juan Carlos Gonzales Q.
 * Email: juangonzaq@gmail.com
 * Date: 4/05/17
 */
Route::get('/', 'PostController@index')->name('index-post');
Route::get('register', 'PostController@register')->name('register-post');
Route::get('detail/{slug}', 'PostController@detail')->name('detail-post');
Route::post('register', 'PostController@store')->name('store-post');

Route::post('login', 'AuthController@login')->name('login');
Route::get('logout', 'AuthController@logout')->name('logout');