<?php

namespace App\Http\Controllers\SiteOne;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteOneController extends Controller
{
    function home() {
        return '<h1>home</h1>' ;
    }

    function about() {
        echo '<h1>about</h1>' ;
    }

    function contact() {
        echo '<h1>contact</h1>' ;
    }

    function msg($id) {
      return view('SiteOne.msg')->with('id' , $id) ;
    }
}
