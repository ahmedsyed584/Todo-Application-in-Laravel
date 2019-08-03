<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests; 
use App\student;
use Illuminate\Http\Request;

class Fromcontroller extends Controller
	{
		
		public function index(Request $request)
		{
		// 	$names = ['Ahmed', 'Amna'];

		// 	$std = new student(["name"=>"Fareed", "lname"=>"Begerat"]);

		// 	//$std->name = "abc";
		// 	$std->save();

		// 	return view('hello')->with(['names'=> $names]);
			dd( $request->all());

		 } 
	}
?>