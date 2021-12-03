@extends('layouts.master')

@section('content')
    <h1>{{$song->name}} - {{$song->artist  }}</h1>
    <p>{{$song->description}}</p>
    <p>{{$song->formattedDuration()}}</p>

@endsection