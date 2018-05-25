<?php

use Illuminate\Http\Request;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/tweets', [
  'uses' => 'TweetController@index',
  'middleware' => ['auth:api']
]);

Route::post('/tweets', [
  'uses' => 'TweetController@store',
  'middleware' => ['auth:api']
]);
