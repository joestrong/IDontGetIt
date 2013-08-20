@extends('layout')

@section('content')
    {{ Form::open(array('action' => 'UserController@login', 'method' => 'post')) }}
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username') }}
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}
        {{ Form::submit('Login') }}
    {{ Form::close() }}
    <a href="/users/register">Sign up</a>
@stop