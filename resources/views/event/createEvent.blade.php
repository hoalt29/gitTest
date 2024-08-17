@extends('event.layout.master')

@section('content')
    <!-- container -->
    <div class="text-bg-success text-center ms-3 me-3" style="padding: 5px; margin-top: 50px;">
        <h2>Thêm sự kiện</h2>
    </div>

    <form class="form-horizontal mt-5" method="POST" action="">
        <input type="hidden" name="Role" value="user">
        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Tên Sự kiện</label>
            <div class="col-md-6">
                <input id="name" type="text" class="form-control text-center" name="TenDangNhap" value>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-md-4 control-label">Người tạo</label>
            <div class="col-md-6">
                <input id="" type="text" class="form-control text-center" name="" value>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-md-4 control-label">Ảnh</label>
            <div class="col-md-6">
                <input id="" type="file" class="form-control text-center" name="" value>
            </div>
        </div>
        <div class="form-group">
            <label for="content" class="col-md-4 control-label">Nội dung</label>
            <div class="col-md-6">
                <textarea id="content" name="content" class="form-control text-center" rows="3"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </div>
        </div>
    </form>
@endsection
