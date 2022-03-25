<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $fillable = [
        'user_id','name'
    ];
    //This model is to generate playlist based on user preferences
    //This is a basic algorithm to find all the medias that matches with the user preferences
    public function generate($user){
        //get user preference
        $preferences = collect($user->preferences);
        $genres = array_unique($preferences->where('type','=','genre')->pluck('name')->toArray());
        $interests = array_unique($preferences->where('type','=','interest')->pluck('name')->toArray());
        $languages = array_unique($preferences->where('type','=','language')->pluck('name')->toArray());

        $medias = $this->medias($genres,$interests,$languages);
        $playlist = Playlist::create(['user_id' => $user->id,'name' => 'Playlist for '.$user->name]);

        $playlistMedias = collect([]);
        foreach($medias as $media){
            $playlistMedia = PlaylistMedia::create(['playlist_id' => $playlist->id,'media_id' => $media->id]);
            $playlistMedias->push($playlistMedia);
        }

        $playlist->playlistMedias = $playlistMedias;

        return $playlist;
    }

    public function medias($genres,$interests,$languages){
        return Media::whereIn('genre',$genres)->whereIn('type',$interests)->whereIn('language',$languages)->get();
    }

    public function playlistMedias(){
        return $this->hasMany(PlaylistMedia::class,'playlist_id','id');
    }

}
