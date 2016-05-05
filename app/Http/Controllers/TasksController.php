<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TasksController extends Controller
{
    function __construct()
	{

	}

    public function index()
	{
		return view('tasks.index');
	}
}
