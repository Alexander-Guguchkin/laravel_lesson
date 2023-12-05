<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
    public function index(Request $request)
    {
        $count = $request->cookie('page_count', 0);
        $count++;

        $response = new Response('Страница была обновлена ' . $count . ' раз');
        $response->withCookie(cookie('page_count', $count, 60)); // Куки будет жить 60 минут

        return $response;
    }

}
