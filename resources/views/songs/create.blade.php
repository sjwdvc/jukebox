@extends('layouts.master')

@section('content')

    <form action="{{route('storeSong')}}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input id="name" name="name" type="text" value="{{old('name')}}">
        <div style="color:red;">{{$errors->has('name') ? $errors->first('name') : ''}}</div>

        <br>
        <label for="description">Description</label>
        <input id="description" name="description" type="text" value="{{old('description')}}">
        <div style="color:red;">{{$errors->has('description') ? $errors->first('description') : ''}}</div>
        <br>
        <label for="artist">Artist</label>
        <input id="artist" name="artist" type="text" value="{{old('artist')}}">
        <div style="color:red;">{{$errors->has('artist') ? $errors->first('artist') : ''}}</div>
        <br>
        <label for="duration">Duration</label>
        <input id="duration" name="duration" type="text" value="{{old('duration')}}">
        <div style="color:red;">{{$errors->has('duration') ? $errors->first('duration') : ''}}</div>
        <br>
        <label for="genre">Genre</label>
        <select id="genre" name="genre_id">
            @foreach($genres as $genre)
                <option value="{{$genre->id}}">{{$genre->name}}</option>
            @endforeach
        </select>
        <div style="color:red;">{{$errors->has('genre_id') ? $errors->first('genre_id') : ''}}</div>
        <br>

        <input type="submit" value="Create song">
    </form>

@endsection