<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
   public function index()
   {
      // $allTodos = Todo::all();
      // dd($allTodos);
       return view('todos.index');
   }
   public function addTodo()
   {
       return view('todos.addTodo');
   }
   public function upload(Request $req)
   {
     $todo =$req->title;
     Todo::create(['todos' => $todo]);
   }
   public function updateTodo()
   {
       return view('todos.updateTodo');
   }
}
