@extends('layoutadmin')
@section('title')
sửa game
@endsection
@section('content')
@if(session('msg'))
<div class="alert alert-success">{{ session('msg') }}</div>
@endif

<form action="{{ route('admin.game.editPost',$game->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div >
        <label for="title">title</label>
        <input type="text" name="title" id="title" value="{{ old('title')?? $game->title }}">
        @error('title')
            <p style="color: red">{{ $message }}</p>
        @enderror
    </div>
    <div >
        <label for="cover_art">cover_art</label>
        <input type="file" name="cover_art" id="cover_art" value="{{ old('cover_art')?? $game->cover_art  }}">
        <img src="{{ asset('uploads/game/'.$game->cover_art) }}" width="70px" >
        @error('cover_art')
            <p style="color: red">{{ $message }}</p>
        @enderror
    </div>
    <div >
        <label for="developer">developer</label>
        <input type="text" name="developer" id="developer" value="{{ old('developer') ?? $game->developer }}">
        @error('developer')
            <p style="color: red">{{ $message }}</p>
        @enderror
    </div>
    <div >
        <label for="release_year">release_year</label>
        <input type="number" name="release_year" id="release_year" value="{{ old('release_year')?? $game->release_year  }}">
        @error('release_year')
            <p style="color: red">{{ $message }}</p>
        @enderror
    </div>
    <div >
        <label for="genre">genre</label>
        <input type="text" name="genre" id="genre" value="{{ old('genre')?? $game->genre  }}">
        @error('genre')
            <p style="color: red">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Sửa</button>
        <a href="{{ route('admin.game.list') }}"><button type="button" class="btn btn-danger">Quay lại</button></a>
    </div>
</form>
@endsection