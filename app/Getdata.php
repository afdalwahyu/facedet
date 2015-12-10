<?php

namespace App;


class Getdata
{
  function wow($ur)
  {
    $client = new \GuzzleHttp\Client();
    $res = $client->request('GET', $ur, [
        'headers' => [
          'User-Agent' => 'detikcom/Android (detikcom on Android)',
          'Accept' => 'text/plain,text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
          'Authorization' => 'Basic ZGV0aWs6ZDN0MWtjMG0=',
          'Connection' => 'Keep-Alive',
          'Accept-Encoding' => 'gzip'
        ]
    ]);

    return $res->getBody();
  }

  public function getMovies()
  {
    $ur = "http://android.detik.com//api/newsfeed?compress=1&min=1&kanal=212&page=1";
    return self::wow($ur);

  }

  function getMusic()
  {
    $ur = "http://android.detik.com//api/newsfeed?compress=1&min=1&kanal=212&page=1";
  }

  function getSports()
  {
    $ur = "http://android.detik.com//api/newsfeed?compress=1&min=1&kanal=212&page=1";
  }

  function getData($ur)
  {

  }

}
