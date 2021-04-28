<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Todos</title>
</head>
<body style='text-align:center'>
    <h1>My todo list</h1>
    <h3>
         <a href='/addTodo'>Add</a>
    </h3>
    <h3>
    <x-alert />
    </h3>
    @foreach($todos as $todo)
        <li>
        @if($todo->todo_status)
            <span style='text-decoration:line-through'>{{$todo->todos}}</span>
        @else
            {{$todo->todos}}
        @endif
            <a href="{{asset('/'. $todo->id.'/updateTodo')}}">Edit</a>
            <a href="{{asset('/'. $todo->id.'/doneTodo')}}">Done</a>
        </li>
    @endforeach
</body>
</html>