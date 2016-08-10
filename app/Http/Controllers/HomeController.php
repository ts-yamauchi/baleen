<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function getIndex()
	{
		return view('home.index');
	}

	public function postIndex(Request $request)
	{
		$address = $request->input('address');
		return('hello world, '.$address);
	}
}
