<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct()
    {
        $this->api = new APIController();
    }

    public function generateUser(){
        $i = User::all()->count() + 1;
        User::updateOrCreate([
            'name' => "User $i",
            'email' => "user$i@example.com",
            'password' => Hash::make('password'),
            'address' => "Home number $i",
            'phone_number' => "012".str_pad($i , 7, "0", STR_PAD_LEFT),
            'country' => 'Malaysia',
            'status' => 'Active',
        ]);
        return redirect('/');
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    public function selectUser($id){
        $user = User::findOrFail($id);
        return view('user',compact('user'));
    }

    public function showAllUsers(Request $request)
    {
        $user_ids = $request->get('user_ids');
        if(isset($user_ids) && count($user_ids) > 0){
            $users = User::whereIn('id',$user_ids)->get();
        }else{
            return $users = User::all();
        }
        return response()->json($users);
    }

    public function showOneUser($id)
    {
        return response()->json(User::find($id));
    }

    public function update($id, Request $request)
    {
        $author = User::findOrFail($id);
        $author->update($request->all());

        $this->api->updateProfile();

        return response()->json($author, 200);
    }
}
