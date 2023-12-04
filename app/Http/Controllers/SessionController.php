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
        $request->session()->put('q', '10');
    }
    public function getSessionTwices(Request $request){
        $result = $request->session()->pull('q');
        dump($result);
        dump($request->session());
    }
    public function getAllSession(Request $request) {
            $allData = $request->session()->all();
            return view('getAllSessionView', ['allData' => $allData]);
    }
    public function setTimeSessionVar(Request $request) {
        if($request->session()->exists('time')){
            $result = $request->session()->get('time');
        }
        else{
            $date = date("H:i:s");
            $result = $request->session()->put('time', $date);
        }
        dump($result);
    }
    public function setArrSession(Request $request){
        $request->session()->put('arrSession',[1,2,3,4,5,6]);
        $request->session()->push('arrSession', '7,8,9,10');
        dump($request->session()->get('arrSession'));
    }
    public function getSessions(Request $request){
        session(['info1' => 'value1']);
        $sessionVar = session('info1');
        dump($sessionVar);
    }
    public  function  getRedirect1(){
        return redirect('/getRiderect2');
    }
    public  function  getRedirect2(){
        return view('getRedirectView');
    }
    public function getNumRedirect1(Request $request){
        if ($request->input('number') > 0 && $request->input('number') < 10){
            return redirect('/getNumRedirect2');
        }
        else{
            dump('число от 1-10');
        }
    }

    // public function redirectUsers (Request $request){
    //     $result1 = $request->input('user');
    //     return redirect()->action([SessionController::class, 'spisokUser'], ['user' => $result1]);

    // }
    // public function spisokUser($user,Request $request ){
    //     $res1 = $request->all();
    //     dump($res1);
    // }
    public function redirectUsers(Request $request){
        $result1 = $request->input('users');
        dump($result1);
        if ($result1) {
            return redirect()->action([SessionController::class, 'spisokUser'], ['users' => $result1]);
        }
    }

    public function spisokUser(Request $request, $users){
        $res1 = $users;
        dump($res1);

    }
}
