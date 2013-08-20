@extends('layout')

@section('content')
    {{ Form::open(array('action' => 'UserController@postRegister', 'method' => 'post')) }}
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username') }}
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email') }}
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}
        {{ Form::label('password2', 'Repeat Password') }}
        {{ Form::password('password2') }}
        {{ Form::submit('Sign up!') }}
    {{ Form::close() }}
@stop