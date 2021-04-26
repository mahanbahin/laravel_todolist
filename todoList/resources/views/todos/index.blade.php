<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Todos</title>
</head>
<body>
    <h1>My todo list</h1>
    <h3>
         <a href='/addTodo'>Add</a>
    </h3>
    @foreach($todos as $todo)
        <li>
            {{$todo->todos}}
        </li>
    @endforeach
</body>
</html>