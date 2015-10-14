{!! HTML::style('css/bootstrap-theme.min.css') !!}
{!! HTML::style('css/bootstrap.min.css') !!}
<div class="col-xs-2"></div>
<div class="col-xs-8">
    {!! FORM::open(array('acton'=>'/auth/register','method'=>'POST')) !!}
    {!! csrf_field() !!}

    <div class="col-xs-8">
        {!! FORM::label('name') !!}
        {!! FORM::text('name','Username',array('class'=>'pull-right'))!!}
    </div class="col-xs-8">

    <div class="col-xs-8">
        {!! FORM::label('email','Email') !!}
        {!! FORM::email('email','your@mail.com',array('class'=>'pull-right'))!!}
    </div>

    <div class="col-xs-8">
        {!! FORM::label('pass','Password') !!}
        {!! FORM::password('pass',array('class'=>'pull-right'))!!}
    </div>

    <div class="col-xs-8">
        {!! FORM::label('pass_conf','Confirm password') !!}
        {!! FORM::password('pass_conf',array('class'=>'pull-right'))!!}
    </div>

    <div class="col-xs-8">
        {!! FORM::submit('Register',array('class'=>'btn-success btn-lg pull-right')) !!}
    </div>
    {!! FORM::close() !!}
</div>
<div class="col-xs-2"></div>
{!! HTML::script('//code.jquery.com/jquery-1.11.3.min.js') !!}
{!! HTML::script('js/bootstrap.min.js') !!}