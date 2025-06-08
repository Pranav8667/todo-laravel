<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('todos.index') }}">Todo App</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('todos.index') }}">All Tasks</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('tasks.completed') }}">Completed Tasks</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('tasks.todo') }}">To-Do Tasks</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">@yield('content')</div>
</body>
</html>