<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use VatsimSSO;
use Session;
use Redirect;

class HomeController extends Controller
{
    public function index()
    {    	
    	return view('home');
    }

    public function competitions()
    {
    	return view('competitions');
    }
}
