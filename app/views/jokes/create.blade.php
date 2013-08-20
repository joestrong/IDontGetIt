@extends('layout')

@section('content')
    {{ Form::open( array('action' => 'JokeController@postCreate', 'method' => 'post') ) }}
        {{ Form::label('joke', 'The joke') }}
        {{ Form::textarea('joke') }}
        {{ Form::label('explanation', 'Explanation (optional)') }}
        {{ Form::textarea('explanation') }}
        {{ Form::submit('Add joke!') }}
    {{ Form::close() }}
@stop