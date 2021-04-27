<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
   public function index()
   {
      $allTodos = Todo::all();
       return view('todos.index')->with(['todos' => $allTodos]);
   }
   public function addTodo()
   {
       return view('todos.addTodo');
   }
   public function upload(Request $req)
   {
       $req->validate([
           'title' => 'required'
       ]);
     $todo =$req->title;
     Todo::create(['todos' => $todo]);
     return redirect()->back()->with('success','New todo is added successfully');
   }
   public function updateTodo()
   {
       return view('todos.updateTodo');
   }
}
