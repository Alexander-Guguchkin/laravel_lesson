<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function getDwas(){
        return new Response('ошибка 201', '201');
    }
    public function getChetiri(){
        return new Response('ошибка 404', '404');
    }
    public function getChetiris(){
        return response('ошибка номер 404', 404);
    }
    public function show1()		{
        return response('Hello World', 200)
            ->header('Content-Type', 'text/plain')
            ->header('X-Header-One', 'value')
            ->header('X-Header-Two', 'value');
    }
    public function show2(){
        return response()->view('show2View')->header('Content-Type','text1');
    }
}
