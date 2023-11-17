<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function getRoleUser(){
        $roles = Role::find(1);
        return view('User.getRoleUserView', ['roles' => $roles]);
    }
}
