<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
   public function index()
   {
      $allTodos = Todo::orderBy('todo_status')->get();
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
   public function updateTodo($id)
   {
       $todo= Todo::find($id);
       return view('todos.updateTodo')->with(['id'=>$id, 'todo'=>$todo]);
   }

   public function saveUpdate(Request $req)
   {
    $req->validate([
        'title' => 'required'
    ]);
    $updatedTodo = Todo::find($req->id);
    $updatedTodo->update(['todos' => $req->title]);
    return redirect('/todos')->with('success','Todo is updated successfully');
   }
   public function doneTodo($id)
   {
       $todo = Todo::find([$id]);
       If ($todo[0]->todo_status)
       {
            $todo[0]->update(['todo_status' => false]);
            return redirect()->back()->with('success','Todo is not done yet');
       }else{
        $todo[0]->update(['todo_status' => true]);
        return redirect()->back()->with('success','Done');
       }

   }
   public function deleteTodo($id)
   {
       $todo = Todo::find($id);
       $todo->delete();
    return redirect()->back()->with('success','Deleted successfully');
   }
}
