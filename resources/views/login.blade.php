@extends('layout.form_css')
@yield('form')
<div style=" margin: 15%;">
    {!!Form::open(array('url'=>'users/login','class'=>'form-horizontal validator-form bv-form'))!!}
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-7">
            {!!Form::text('email','',array('placeholder'=>'E-mail','style'=>'margin:5px;', 'class'=>'form-control') )!!}
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-7">
            {!!Form::password('password',array('placeholder'=>'password','style'=>'margin:5px;', 'class'=>'form-control') )!!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-7">
          @if(isset($error))
            <p style="color:red;"> {{$error}} </p>
            @endif
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-7">
            {!!Form::submit('Sign in',array('class'=>'btn btn-primary' , 'style'=>'margin-left:29%;'))!!}
        </div>
    </div>

    {!!Form::close()!!}
</div>
