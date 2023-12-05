<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Cookie;
class CookieController extends Controller
{
    public function setCookie()
    {
        return response('text')->cookie('val1', 'values', 10);
    }
    public function getCookie(Request $request)
    {
        $val1  = $request->cookie('val1');
        dump($val1);
    }
    public function Main(Request $request)
    {
        $count = $request->cookie('page_count', 0);
        $count++;

        $response = new Response('Страница была обновлена ' . $count . ' раз');
        $response->withCookie(cookie('page_count', $count, 10));

        return $response;
    }
    public function Ochered(){
        Cookie::queue('val1', 'v1', 10);
        Cookie::queue('val2', 'v2', 10);
        Cookie::queue('val3', 'v3', 10);
        return response('t1');
    }
}
