<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function getProfileUser(){
        $profile = Profile::find(1);
        $queryProfiles = $profile->user;
        $queryLinkDB = DB::table('users')->leftJoin('profiles', 'users.id', '=', 'profiles.id')->get();
        return view('Profile.getProfileUserView', ['profile' => $profile , 'queryLinkDB' => $queryLinkDB]);
    }
}
