@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Sign Up</h1>

            {{ Form::open(['route'=>'register','method'=>'POST','role'=>'form']) }}

{{--            {{ App::make('field')->input('text','full_name') }}--}}
            {{ Field::input('text','full_name') }}
            {{ Field::input('email','email') }}
            {{ Field::input('password','password') }}
            {{ Field::input('password_confirmation','password') }}
            {{--{{ $fieldBuilder->input('email','email') }}--}}
            {{--{{ $fieldBuilder->input('password','password') }}--}}
            {{--{{ $fieldBuilder->input('password_confirmation','password_confirmation') }}--}}


            {{--<div class="form-group">--}}
                {{--{{ Form::label('email','Correo')}}--}}
                {{--{{ Form::email('email',null,['class' =>'form-control'])}}--}}
                {{--{{ $errors->first('email','<p class="error_message">:message</p>') }}--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--{{ Form::label('password','Clave')}}--}}
                {{--{{ Form::password('password',['class' =>'form-control'])}}--}}
                {{--{{ $errors->first('password','<p class="error_message">:message</p>') }}--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--{{ Form::label('password_confirmation','Repite tu Clave')}}--}}
                {{--{{ Form::password('password_confirmation',['class' =>'form-control'])}}--}}
                {{--{{ $errors->first('password_confirmation','<p class="error_message">:message</p>') }}--}}
            {{--</div>--}}
            <p>
                <input type="submit" value="Register" class="btn btn-success">
            </p>
            {{ Form::close() }}
        </div>

    </div>
</div>

@stop