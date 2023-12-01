<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function sessionIndex(Request $request){
        $request->session()->put('onceVars', 1);
    }
    public function getSession(Request $request){
        $value = $request->session()->get('assign');
        dump($value);
        dump($request->session());
    }
    public function updateCounter(Request $request)
{
    if ($request->session()->has('assign')) {
        $pageViews = $request->session()->get('assign') + 1;
    } else {
        $pageViews = 1;
    }

    $request->session()->put('assign', $pageViews);
    dump($pageViews);
}

public function indexUpdateSession(Request $request){
    if ($request->session()->has('posCounter')) {
       $value = $request->session()->get('posCounter', 0);
       $request->session()->put('posCounter', $value + 1);
    }
    else{
        $request->session()->put('posCounter', 0);
    }
    dump($request->session()->get('posCounter'));
}
public function dateSession(Request $request){
           // Получаем время первого захода пользователя
           $firstVisitTime = $request->session()->get('firstVisitTime');

           // Если время первого захода не установлено, устанавливаем его
           if (!$firstVisitTime) {
               $firstVisitTime = now();
               $request->session()->put('firstVisitTime', $firstVisitTime);
           }

           // Выводим время первого захода на экран
          dump($firstVisitTime);
       }
    public function delSession(Request $request){
        $request->session()->forget('posCounter');

    }

    public function dSTwices(Request $request){

    }

}

