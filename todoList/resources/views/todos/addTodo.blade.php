<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos</title>
</head>
<body style='text-align:center'>
<div>
    <h1>Add new Todo</h1>
    <h3>
        <x-alert /> 
    </h3>
    <form action='upload', method='post'>
        @csrf
        <input type='text' name='title'>
        <input type='submit' value='Add'>
    </form>
    <br>
    <a href='/todos'>Back</a>
</div>
</body>
</html>