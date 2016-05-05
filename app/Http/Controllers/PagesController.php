<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
	function __construct()
	{

	}

    public function home()
	{
		//return 'Hello, Welcome home!';
		return view('pages.home');
		//return view('welcome');
	}
}
