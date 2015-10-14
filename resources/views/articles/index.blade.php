<html>
<head>
    {!! HTML::style('css/bootstrap-theme.min.css') !!}
    {!! HTML::style('css/bootstrap.min.css') !!}
    <title>Blog Application Using aravel 5.1</title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="#">My Blog</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            {!! FORM::open(array('class'=>'navbar-form navbar-right')) !!}
            {!! FORM::label('','',array('class'=>'glyphicon glyphicon-user text-success','for' => 'email')) !!}
            {!! FORM::text('email','Email', array('class' => 'form-control')) !!}
            {!! FORM::label('','',array('class'=>'glyphicon glyphicon-lock text-success','for' => 'email')) !!}
            {!! FORM::password('password', array('class' => 'form-control')) !!}
            {!! FORM::button('login', array('class' => 'btn btn-success btn-lg', 'type' => 'submit')) !!}
            {!! FORM::close() !!}
        </div>
    </div>
</nav>

<div class="jumbotron">
    <div class="container">
        <h2>Blog articles</h2>
    </div>
</div>

    @foreach($articles as $article)
        <div class="row">
            <div class="col-xs-2"></div>
  <article class="col-xs-8 ">
            <h4>    {{$article->title}}    </h4>
            <p>     {{$article->body}}     </p>
            <p><a class="btn btn-default" href="/articles/{{$article->id}}" role="button">Подробнее</a></p>
  </article>
            <div class="col-xs-2"></div>
        </div>
    @endforeach

<div class="container">


    <hr>
    <div class="col-xs-2"></div>
    <footer class="col-xs-2">
        <p>&copy; Karnaukh Mikhail 2015</p>
    </footer>
    <div class="col-xs-2"></div>
    {!! HTML::script('//code.jquery.com/jquery-1.11.3.min.js') !!}
    {!! HTML::script('js/bootstrap.min.js') !!}
</div>
</body>
</html>
