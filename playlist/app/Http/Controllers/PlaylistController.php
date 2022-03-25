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
        if(count($users) == 0){
            return 'no users';
        }
        foreach($users as $user){
            if(count($user->preferences) == 0){
                continue;
            }
            $this->playlist->generate($user);
        }
        return 'success';
    }

    public function getUsers($request){
        $users =  $this->api->users($request);
        return $users;
    }

    public function showAllPlaylists(Request $request)
    {
        $user_id = $request->get('user_id');
        if(isset($user_id)){
            $users = Playlist::where('user_id','=',$user_id)->with('playlistMedias.media')->get();
        }else{
            return collect([]);
        }
        return response()->json($users);
    }
}
