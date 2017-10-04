<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	 * Show the homepage
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function index()
	{
		return view('pages.home');
	}
}
