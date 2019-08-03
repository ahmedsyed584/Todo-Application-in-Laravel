<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class todoController extends Controller
{
    //
    public function index()
    {
    	$todo = Todo::all();

    	return view('todo')->with('todos', $todo);
    }

    public function store(Request $request)
    {
    	$todo = new Todo;

    	$todo->todo = $request->todo;

    	$todo->save();

    	return redirect()->back();
    }
	
    
    public function delete($id)
    {
    	$todo = Todo::find($id);

    	$todo->delete();

    	return redirect()->back();
    }

    public function update($id)
    {
        $todo = Todo::find($id);

        return view('update')->with('todo', $todo);

    }

    public function updated(Request $request, $id)
    {

       //dd($request->all());
        $todo = Todo::find($id);

        $todo->todo = $request->todo;

        $todo->save();
        return redirect('todo');
        //return view('todo');
    }



}
