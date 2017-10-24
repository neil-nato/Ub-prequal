<?php
// 
// namespace App\Http\Controllers;

namespace BotbrosAi\UnionBank\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;

class GuzzleController extends Controller
{
    private $client;

    public function __construct(){
      $this->client = new Client([
         'headers' => ['content-type' => 'application/json',
                       'accept' => 'application/json',
                       'x-ibm-client-id' => '5bf50e05-08ba-42d1-bbaa-010a66fadf29', //to be moved in .env in later
                       'x-ibm-client-secret' => 'vL8dT4pY6uO4bM4wT0uT3qO6uW7iJ1oG6tI7kL3rQ1bE4uB8uW'//to be moved in .env in later
                      ]
       ]);
    }

    public function getRemoteData()
    {
      $response = $this->client->request('GET', 'https://api-uat.unionbankph.com/ubp/uat/auto/vehicles?brand=&ceiling=');

      $stream = Psr7\stream_for($response->getBody());

      // echo $stream->getContents();
      //dump($stream->getContents());
      return $response->getBody();

    }

    public function calculateAmmort(Request $request)
    {
      //?term=24&price=1000000&dp=30
    $response = $this->client->request('GET', 'https://api-uat.unionbankph.com/ubp/uat/auto/loans/compute',[
    'query' => ['term' =>  $request->query('term'),
                'price' => $request->query('price'),
                'dp' => $request->query('dp')]
    ]);

    $stream = Psr7\stream_for($response->getBody());

    return $response->getBody();
    }
}
