<html>
<head>
    {!! HTML::style('css/bootstrap-theme.min.css') !!}
    {!! HTML::style('css/bootstrap.min.css') !!}
    <title>Blog Application Using aravel 5.1</title>
</head>
<body>
@yield('header')
@yield('navigation')
@yield('content')
<div class="container">


    <hr>

    <footer>
        <p>&copy; Karnaukh Mikhail 2015</p>
    </footer>
    {!! HTML::script('//code.jquery.com/jquery-1.11.3.min.js') !!}
    {!! HTML::script('js/bootstrap.min.js') !!}
</div>
</body>
</html>