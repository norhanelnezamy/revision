@extends('layout.main')
@section('content')
    <div class="panel-heading">Update User Information</div>
    <div class="panel-body">
        {{--{{$user->id}}--}}
        {!!Form::open(array('url'=>'users/update','class'=>'form-horizontal validator-form bv-form'))!!}
        {!!Form::hidden('id',$user->id)!!}
        <div class="form-group has-feedback has-error">
            <label class="col-lg-3 control-label">E-mail</label>
            <div class="col-lg-6">
                {!!Form::text('email',$user->email,array('placeholder'=>'e-mail','style'=>'margin:5px;'))!!}<br>
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
            <label class="col-lg-3 control-label">Telephone</label>
            <div class="col-lg-6">
                {!!Form::text('telephone',$user->telephone,array('placeholder'=>'telephone','style'=>'margin:5px;'))!!}<br>
                @if($errors->has('telephone'))
                    <ul>
                        @foreach($errors->get('telephone') as $er)
                            <li>{{$er}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
        <div class="form-group has-feedback has-error">
            <label class="col-lg-3 control-label">First Name</label>
            <div class="col-lg-6">
                {!!Form::text('first_name',$user->first_name,array('placeholder'=>'first name','style'=>'margin:5px;'))!!}<br>
                @if($errors->has('first_name'))
                    <ul>
                        @foreach($errors->get('first_name') as $er)
                            <li>{{$er}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
        <div class="form-group has-feedback has-error">
            <label class="col-lg-3 control-label">Last Name</label>
            <div class="col-lg-6">
                {!!Form::text('last_name',$user->last_name,array('placeholder'=>'last name','style'=>'margin:5px;'))!!}<br>
                @if($errors->has('last_name'))
                    <ul>
                        @foreach($errors->get('last_name') as $er)
                            <li>{{$er}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
        <div class="form-group has-feedback has-error">
            <label class="col-lg-3 control-label">Role</label>
            <div class="col-lg-6">
                {!!Form::select('role',array('1'=>'admin', '0'=>'user'),'admin',array('style'=>'margin:5px'))!!}<br>
            </div>
            {!!Form::submit('Update User information',array('class'=>'btn btn-primary'))!!}
            {!!Form::close()!!}
        </div>
    </div>
@stop