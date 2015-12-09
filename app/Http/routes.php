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

  $x = json_decode($response->getGraphUser());



  //$movies = count($x->movies);
  $movies = (isset($x->movies) ? count($x->movies) : 0);
  $television = (isset($x->television) ? count($x->television) : 0);
  $item['mov_tv'] = $movies + $television;
  $item['music'] = (isset($x->music) ? count($x->music) : 0);
  $item['favorite_teams'] = (isset($x->favorite_teams) ? count($x->favorite_teams) : 0);

  $maxs = array_keys($item, max($item));
  echo $maxs[0];
}]);
