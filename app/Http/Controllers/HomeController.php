<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Utils;

class HomeController extends Controller
{
    public function index(){
        /* 回傳字串
        return "index";
        */
        /* 回傳頁面 */
        return view("welcome");
    }
}

