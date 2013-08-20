@extends('layout')

@section('content')
    @foreach($jokes as $joke)
        <p>{{ $joke->joke }}</p>
    @endforeach
@stop