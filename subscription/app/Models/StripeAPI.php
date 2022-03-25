<?php

namespace App\Models;

use Stripe\Stripe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class StripeAPI extends Model
{
    protected $running_numbers;

    public function __construct()
    {
        $this->running_numbers = 6;
    }

    public function charge($user){
        $charge = $this->createCharge($user);
        $invoice = $this->createInvoice($user,$charge);
        return response()->json($invoice);
    }
    public function createCharge($user){
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $plan = $user->plan;
        $amount = $plan->price_per_month;
        $charge = \Stripe\Charge::create([
            "amount" => $amount * 100,
            "currency" => 'myr',
            "source" => 'tok_visa',
            "description" => 'Monthly subscription payment',
        ]);
        // Send Payment Intent details to client
        return $charge;
    }

    public function createInvoice($user,$charge){
        $request = new Request();
        $request->merge([
            'user_id' => $user->id,
            'plan_id' => $user->plan->id,
            'invoice_number' => $this->generateInvoiceNumber(),
            'charge_id' => $charge->id,
            'amount' => $user->plan->price_per_month,
            'name' => $user->name,
            'email' => $user->email,
            'address' => $user->address,
            'phone_number' => $user->phone_number,
            'country' => $user->country,
        ]);
        $invoice = Invoice::create($request->all());

        return $invoice;
    }

    public function generateInvoiceNumber(){
        $max_num = 0;
        $prefix = date('Y');

        $invoice_numbers = Invoice::where('invoice_number','LIKE',$prefix.'%')
            ->pluck('invoice_number');

        foreach($invoice_numbers as $invoice_number){
            $count = substr($invoice_number, -$this->running_numbers);
            if($count > $max_num){
                $max_num = $count;
            }
        }

        return str_pad($max_num + 1, $this->running_numbers, "0", STR_PAD_LEFT);
    }
}
