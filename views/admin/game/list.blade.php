@extends('layoutadmin')
@section('title')
Danh sách game
@endsection
@section('content')
@if(session('msg'))
<div class="alert alert-success">{{ session('msg') }}</div>
@endif

<a href="{{ route('admin.game.create') }}"><button class="btn btn-success">Thêm mới</button></a>


<table class="table">
    <tr>
        <th>ID</th>
        <th>title</th>
        <th>cover_art</th>
        <th>developer</th>
        <th>release_year</th>
        <th>genre</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    @foreach ($data as $key => $item)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $item->title }}</td>
        <td>
            <img src="{{ asset('uploads/game/'.$item->cover_art) }}" width="70px" >
        </td>
        <td>{{ $item->developer }}</td>
        <td>{{ $item->release_year }}</td>
        <td>{{ $item->genre }}</td>
        <td><a href="{{ route('admin.game.edit', $item->id) }}"><button class="btn btn-warning">Sửa</button></a>
        </td>
        <td><a href="{{ route('admin.game.destroy', $item->id) }}"
                onclick="return confirm('Bạn có chắc xóa không ?')"><button class="btn btn-danger">Xóa</button></td>
    </tr>
    @endforeach
</table>
@endsection