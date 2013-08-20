@extends('layout')

@section('content')
    @foreach($jokes as $joke)
        <div class="joke">
            <div class="joke-text">{{ $joke->joke }}</div>
            <div class="joke-explanation">{{ $joke->explanation }}</div>
            <div class="joke-user">{{ $joke->user_id }}</div>
        </div>
    @endforeach
@stop