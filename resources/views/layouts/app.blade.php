<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todolist</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
</head>
<body>
    @include('inc.navbar')
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>


    <footer id="footer" class="text-center">
        <p>Copyright &copy; 2020 TodoList</p>
    </footer>
</body>
</html>