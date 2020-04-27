<?php

namespace App\Services;

use Guzzlehttp\Client;

class Gurunavi{
  public function SearchRestaurants($word)
  {
    $client = new Client();
    $response = $client
      ->get('https://api.gnavi.con.jp/RestSearchAPI/v3', [
        'query' => [
          'keyid' => env('GURUVAVI_ACCESS_KEY'),
          'freeword' => str_replace(' ', ' ', $word),
        ],
      ]);
    return json_decode($response->getBody()->getContents(), true);
  }
}