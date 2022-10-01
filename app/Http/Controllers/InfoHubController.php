<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class InfoHubController extends Controller
{


    public  function index()
    {
        return view('front.login.login');
    }
    public  function home()
    {
        return view('redirectPage');
    }



}
