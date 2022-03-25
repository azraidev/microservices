<?php

namespace App\Http\Controllers;

use App\Models\ExternalService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function playlists($request){
        $name = 'Retrieve Playlists';
        $url = $this->urls['playlist'].'/api/playlists';
        $method = 'GET';
        $headers = ['api-version' => 'v1','auth_key' => env("AUTH_KEY_PLAYLIST")];
        $params = $request->all();
        $array = [
            'name' => $name,
            'url' => $url,
            'method' => $method,
            'headers' => $headers,
            'params' => $params,
        ];

        $api = (object)$array;
        $playlists = json_decode($this->executeAPI($api));
        return $playlists;
    }
}
