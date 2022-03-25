<?php

namespace App\Http\Controllers;

use App\Models\ExternalService;

class APIController extends Controller
{
    protected $api;
    protected $urls;

    public function __construct(){
        $this->urls = [];
        foreach(ExternalService::where('enabled',1)->get() as $service){
            $this->urls[$service->name] = $service->url;
        }
    }

    public function users($request){
        $name = 'Retrieve Profiles';
        $url = $this->urls['profile'].'/api/users';
        $method = 'GET';
        $headers = ['api-version' => 'v1','auth_key' => env("AUTH_KEY_PROFILE")];
        $params = $request->all();
        $array = [
            'name' => $name,
            'url' => $url,
            'method' => $method,
            'headers' => $headers,
            'params' => $params,
        ];

        $api = (object)$array;
        $users = json_decode($this->executeAPI($api));
        return $users;
    }
}
