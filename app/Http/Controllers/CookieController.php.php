
<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class CookieController extends Controller
{
    // public function setCookie(Request $request)
    // {
    //     $response = new Response("set!!");
    //     $response->withCookie(cookie('name', 'avas27', 1));
    //     return $response;
    // }
    public function setCookie(Request $request)
    {
        $minutes = 1;
        $response = new  \Illuminate\Http\Response('set');
        $response->withCookie(cookie('name', 'sumit', $minutes));
        return $response;
    }

    public function getCookie(Request $request)
    {
        echo $request->cookie('name');
    }
}