@extends('layoutadmin')
@section('title')
thêm mới game
@endsection
@section('content')
@if(session('msg'))
<div class="alert alert-success">{{ session('msg') }}</div>
@endif

<form action="{{ route('admin.game.createPost') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div >
        <label for="title">title</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
        @error('title')
            <p style="color: red">{{ $message }}</p>
        @enderror
    </div>
    <div >
        <label for="cover_art">cover_art</label>
        <input type="file" name="cover_art" id="cover_art" value="{{ old('cover_art') }}">
        @error('cover_art')
            <p style="color: red">{{ $message }}</p>
        @enderror
    </div>
    <div >
        <label for="developer">developer</label>
        <input type="text" name="developer" id="developer" value="{{ old('developer') }}">
        @error('developer')
            <p style="color: red">{{ $message }}</p>
        @enderror
    </div>
    <div >
        <label for="release_year">release_year</label>
        <input type="number" name="release_year" id="release_year" value="{{ old('release_year') }}">
        @error('release_year')
            <p style="color: red">{{ $message }}</p>
        @enderror
    </div>
    <div >
        <label for="genre">genre</label>
        <input type="text" name="genre" id="genre" value="{{ old('genre') }}">
        @error('genre')
            <p style="color: red">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Thêm mới</button>
        <a href="{{ route('admin.game.list') }}"><button type="button" class="btn btn-danger">Quay lại</button></a>
    </div>
</form>
@endsection