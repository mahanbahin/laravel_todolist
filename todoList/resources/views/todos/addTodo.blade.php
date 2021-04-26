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
    <h1>My todo list</h1>
    <form method='post', action='upload'>
        @csrf
        <input type='text' name='title'>
        <input type='submit' value='Add'>
    </form>
    <br>
    <a href='/todos'>Back</a>
</div>
</body>
</html>