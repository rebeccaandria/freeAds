<?php

namespace App\Http\Controllers;

Class IndexController extends Controller
{
    public function showIndex()
    {
        return view('index');
    }
}