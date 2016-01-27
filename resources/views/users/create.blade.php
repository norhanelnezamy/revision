@extends('layout.main')
@section('content')
    <div class="panel-heading">Add New User</div>
    <div class="panel-body">
        {!!Form::open(array('url'=>'users/create','files'=> true,'class'=>'form-horizontal validator-form bv-form'))!!}
        <div class="form-group has-feedback has-error">
            <label class="col-lg-3 control-label">E-mail</label>
            <div class="col-lg-6">
        {!!Form::text('email','',array('placeholder'=>'e-mail','style'=>'margin:5px;'))!!}<br>
        @if($errors->has('email'))
            <ul>
                @foreach($errors->get('email') as $er)
                    <li>{{$er}}</li>
                @endforeach
            </ul>
        @endif
            </div>
            </div>
            <div class="form-group has-feedback has-error">
                <label class="col-lg-3 control-label">Photo</label>
                <div class="col-lg-6">
            {!!Form::file('photo')!!}<br>
            @if($errors->has('photo'))
                <ul>
                    @foreach($errors->get('photo') as $er)
                        <li>{{$er}}</li>
                    @endforeach
                </ul>
            @endif
                </div>
                </div>
            <div class="form-group has-feedback has-error">
                <label class="col-lg-3 control-label">Username</label>
                <div class="col-lg-6">
            {!!Form::text('username','',array('placeholder'=>'username','style'=>'margin:5px;'))!!}<br>
            @if($errors->has('username'))
                <ul>
                    @foreach($errors->get('username') as $er)
                        <li>{{$er}}</li>
                    @endforeach
                </ul>
            @endif
                </div>
                </div>
        <div class="form-group has-feedback has-error">
            <label class="col-lg-3 control-label">Password</label>
            <div class="col-lg-6">
        {!!Form::password('password',array('placeholder'=>'password','style'=>'margin:5px;'))!!}<br>
        @if($errors->has('password'))
            <ul>
                @foreach($errors->get('password') as $er)
                    <li>{{$er}}</li>
                @endforeach
            </ul>
        @endif
            </div>
            </div>
        <div class="form-group has-feedback has-error">
            <label class="col-lg-3 control-label">Confirm Password</label>
            <div class="col-lg-6">
        {!!Form::password('password_confirmation',array('placeholder'=>'confirm password','style'=>'margin:5px;'))!!}<br>
        @if($errors->has('password_confirmation'))
            <ul>
                @foreach($errors->get('password_confirmation') as $er)
                    <li>{{$er}}</li>
                @endforeach
            </ul>
        @endif
            </div>
            </div>

        <div class="form-group has-feedback has-error">
        {!!Form::submit('Insert New User',array('class'=>'btn btn-primary'))!!}
        {!!Form::close()!!}
    </div>
    </div>
@stop
