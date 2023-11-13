<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getUserInfos(){
        $user = User::find(1);
        $queryHasOne = $user->profile;
        return view('User.getUserInfos', [
            'queryHasOne' => $queryHasOne,
            'user' => $user
        ]);
    }
    public function getAllInfoUsers(){
        $user = User::with('profile')->get();
        return view('User.getUserInfos', [
            'user' => $user
        ]);
    }
}
