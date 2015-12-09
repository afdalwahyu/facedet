<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');
Route::get('getnews',['as' => 'getnews','uses' => function(){
  $fb = new \Facebook\Facebook([
    'app_id' => '1060710973993349',
    'app_secret' => '3d4b7b2a144e4e5dd3c536a1e0d96562',
    'default_graph_version' => 'v2.5',
    ]);
    //haha
  try {
    // Returns a `Facebook\FacebookResponse` object
    $response = $fb->get('/me?fields=id,name,movies,music,television,favorite_teams', session('token'));
  } catch(\Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
  } catch(\Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
  }

  $x = $response->getGraphUser();

  $x = json_decode($x);

  $movies = count($x->movies);
  $item['music'] = count($x->music);
  $television = count($x->television);
  $item['favorite_teams'] = count($x->favorite_teams);
  $item['mov_tv'] = $movies + $television;

  $maxs = array_keys($item, max($item));
  echo $maxs[0];
}]);
