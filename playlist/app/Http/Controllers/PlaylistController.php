<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    protected $api;
    protected $playlist;

    public function __construct()
    {
        $this->api = new APIController();
        $this->playlist = new Playlist();
    }

    public function generatePlaylist(){
        $request = new Request();
        $users = $this->getUsers($request);

        foreach($users as $user){
            $this->playlist->generate($user);
        }
    }

    public function getUsers($request){
        $users =  $this->api->users();
        return $users;

    }
}
