<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index()
	{
		return view('demo/index');
	}

	// public function ajax(Request $request)
	// {
	// 	$fullName = $request->get('fullName');
	// 	return response()->json(array('msg' => 'Hello ' . $fullName));
	// 	dd($request);
	// }

}
