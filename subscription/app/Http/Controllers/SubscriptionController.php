<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\StripeAPI;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    protected $api;
    protected $stripe;

    public function __construct()
    {
        $this->api = new APIController();
        $this->stripe = new StripeAPI();
    }

    public function chargeMonthlyUsers(){
        $request = new Request();
        $users = $this->getUsers($request);

        foreach($users as $user){
            $this->stripe->charge($user);
        }
    }

    public function getUsers($request){
        $user_ids = Subscription::where('end','<',date('Y-m-d H:i:s'))->with('plan')->pluck('user_id')->toArray();
        $users =  $this->api->users($request->merge(['user_ids' => $user_ids]));
        foreach($users as $user){
            $user->plan = Plan::find($user->id);
        }
        return $users;

    }
}
