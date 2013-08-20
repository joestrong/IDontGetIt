@extends('layout')

@section('content')
    {{ Form::open(array('action' => 'UserController@postLogin', 'method' => 'post')) }}
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username') }}
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}
        {{ Form::submit('Login') }}
    {{ Form::close() }}
    <a href="/register">Sign up</a>
@stop