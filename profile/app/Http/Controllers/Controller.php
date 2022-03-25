<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $cert;
    protected $ssl;

    public function __construct(){
    }

    public function executeAPI($api){
        $method = $api->method;
        $url = $api->url;

        $clientParam[RequestOptions::HEADERS] = $api->headers;
        $clientParam[RequestOptions::JSON] = $api->params;

        $client = new Client();
        try {
            $response = null;
            if (strtoupper($method) == 'GET') {
                $response = $client->get($url, $clientParam);
            }
            if (strtoupper($method) == 'POST') {
                $response = $client->post($url, $clientParam);
            }
            if(isset($response) && $response->getStatusCode() == 200){
                //Log::info("API Call Success - API : $api->name, Response : ".json_encode($response->getBody()->getContents()));
                return $response->getBody()->getContents();
            }else{
                dd($response);
                return null;
            }
        }catch (\Exception $e) {
            dd($e);
            Log::info("API Call Error - API : $api->name, Error : ".json_encode($e->getMessage()));
            return null;
        }
    }
}
