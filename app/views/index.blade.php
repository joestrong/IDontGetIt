@extends('layout')

@section('content')
    @foreach($jokes as $joke)
        <div class="joke">
            <div class="joke-text">{{ $joke->joke }}</div>
            <div class="joke-explanation">{{ $joke->explanation }}</div>
            <div class="joke-user">
                @if($joke->user)
                    Joke added by <span class="joke-user-username">{{ $joke->user->username }}</span>
                @endif
            </div>
        </div>
    @endforeach
@stop