<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    function home(){
        return view('Home',
        ["title" => "Home"]);
    }
}
