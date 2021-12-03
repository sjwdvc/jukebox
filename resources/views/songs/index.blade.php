@extends('layouts.master')

@section('content')
    <a href="{{route('createSong')}}">Add Song</a>
    <ul>
        @foreach($allSongs as $song)
            <li><a href="{{route('viewSong', $song->id)}}">{{$song->name}}</a> - <span>{{$song->formattedDuration()}}</span></li>
        @endforeach
    </ul>

@endsection