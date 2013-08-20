@extends('layout')

@section('content')
    {{ Form::open(array('action' => 'UserController@register', 'method' => 'post')) }}
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username') }}
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}
        {{ Form::submit('Sign up!') }}
    {{ Form::close() }}
@stop