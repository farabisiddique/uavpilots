<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserData;

class userProfileController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($username)
    {
        // return view('profile', ['user' => User::findOrFail($id)]);

        $user = User::whereUsername($username)->firstOrFail();

        $user_id = $user->id;

        $user_data = UserData::findOrFail($user_id);

        // return view('profile', var_dump(User::findOrFail($id)));

                // return view('profile', var_dump($user));

        // return view("profile", ["user"=>$user]);

           return view("profile", ["user"=>$user_data]);


        // return View::make('profile.show', compact('user'));



        // return view('profile');

    }


}
