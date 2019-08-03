<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function index()
    {
    	return view('myform');
    }

    public function store(Request $req)
    {
    	dd($req->all());
    }
}
