<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form(){
        return view('Form.formView');
    }
    public function getResult(Request $request){
        $n1 = $request->input('number1');
        $n2 = $request->input('number2');
        return view('Form.resultView', ['n1' => $n1,'n2' => $n2]);
    }

    public function formPost(){
        return view('Form.formPostsView');
    }
    public function getresultPost(Request $request){
        $user = [$request->input('name'), $request->input('age'), $request->input('salary')];
        return view('Form.resultPostsView', ['user' => $user]);
    }
}
