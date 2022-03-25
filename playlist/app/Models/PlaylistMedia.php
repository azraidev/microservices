<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlaylistMedia extends Model
{
    protected $fillable = [
        'playlist_id','media_id'
    ];

    public function media(){
        return $this->hasOne(Media::class,'id','media_id');
    }
}
