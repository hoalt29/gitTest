@extends('event.layout.master')

@section('content')
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" style="padding: 15px;">
                    <div class="panel-heading bg-success text-center text-white">
                        <div class="p">
                            <h2>ĐĂNG KÝ THAM GIA SỰ KIỆN</h2>
                        </div><br>
                        <div class="img">
                            <img src="user/img/apple-touch-icon-114x114.png" alt="">
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="">
                            <input type="hidden" name="Role" value="user">
                            <div class="form-group">
                                <label for="name" class="control-label fw-bold">Họ và tên</label>
                                <div class="form">
                                    <input id="name" type="text" class="form-control" name="TenDangNhap" value>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label fw-bold">Email</label>
                                <div class="form">
                                    <input id="email" type="email" class="form-control" name="Email" value>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="control-label fw-bold">Số điện thoại</label>
                                <div class="form">
                                    <input id="phone" type="phone" class="form-control" name="phone">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text" class="control-label fw-bold">Bạn muốn biết thêm gì về sự kiện</label>
                                <div class="form">
                                    <input id="text" type="text" class="form-control" name="text">
                                </div>
                            </div>

                            <div class="">
                                <label for="password-confirm" class="control-label fw-bold">Xác nhận tham gia</label>
                                <div class="form-check ms-4">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">Xác nhận</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form col-md-offset-4 mt-4">
                                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
