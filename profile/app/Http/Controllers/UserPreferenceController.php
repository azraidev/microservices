<?php

namespace App\Http\Controllers;

use App\Models\UserPreference;
use Illuminate\Http\Request;

class UserPreferenceController extends Controller
{
    public function store(Request $request)
    {
        UserPreference::create($request->all());

        return redirect()->back();
    }

    public function update($id, Request $request)
    {
        $author = UserPreference::findOrFail($id);
        $author->update($request->all());

        $this->api->updateProfile();

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        UserPreference::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
