<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function viewWelcome()
    {
        return view('welcome');
    }
}
