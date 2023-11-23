<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormUserController extends Controller
{
    public function FormUser (Request $request){
        $alldata = $request->all();
        return view('FormUsers.ResultView', ['alldata' => $alldata]);
    }
}
