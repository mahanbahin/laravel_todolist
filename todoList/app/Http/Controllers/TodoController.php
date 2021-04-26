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
           'todos' => 'required'
       ]);
     $todo =$req->title;
     Todo::create(['todos' => $todo]);
     return redirect()->back();
   }
   public function updateTodo()
   {
       return view('todos.updateTodo');
   }
}
