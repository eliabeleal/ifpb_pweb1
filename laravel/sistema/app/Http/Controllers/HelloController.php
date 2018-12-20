<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function add()
    {
        return 'Requisição chegou pelo post';
    }
    function home()
    {
        return view('home');
    }
}
