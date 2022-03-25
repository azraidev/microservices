<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    public function plan(){
        return $this->hasOne(Plan::class,'id','plan_id');
    }
}
