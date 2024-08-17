@extends('event.layout.master')

@section('content')
    <div class="text-bg-success text-center ms-3 me-3" style="padding: 5px; margin-top: 50px;">
        <h2>Danh sách sự kiện</h2>
    </div>

    <div class="container mt-3">
        <a href="createEvent.html"><button class="btn btn-primary">Thêm sự kiện</button></a>
        <table class="table mt-3">
            <tr>
                <th>ID</th>
                <th>Tên sự kiện</th>
                <th>Người tạo</th>
                <th>Ảnh</th>
                <th>Nội dung</th>
                <th>Ngày tạo</th>
                <th>Hành động</th>
            </tr>
            <tr>
                <td>1</td>
                <td>SK1</td>
                <td>Admin</td>
                <td><img src="user/img/apple-touch-icon.png" alt=""></td>
                <td>jkadfha</td>
                <td>17-08-2024</td>
                <td>
                    <a href="editEvent.html"><button class="btn btn-warning">Sửa sự kiện</button></a>
                    <a href=""><button class="btn btn-danger" onclick="return confirm('Có chắc bạn muốn xoá?')">Xoá
                            sự kiện</button></a>
                </td>
            </tr>
        </table>
    </div>
@endsection
