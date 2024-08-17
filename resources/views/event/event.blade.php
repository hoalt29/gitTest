@extends('event.layout.master')

@section('content')
    <!-- container -->
    <div class="text-bg-success text-center mt-3 ms-3 me-3" style="padding: 5px;">
        <h2>Sự kiện</h2>
    </div>

    <div class="row  row-cols-md-3 g-4" style="padding: 50px;">
        <div class="col-3">
            <div class="card">
                <img src="user/img/path/image1.jpg" style="width: auto; height: 300px;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sự kiện 1</h5>
                    <p class="card-text">Sự kiện hấp dẫn. Hãy đăng ký tham gia sự kiện này ngay.</p>
                </div>
                <div class="d-grid gap-2 d-md-block ms-3 mb-3">
                    <button class="btn btn-primary" type="button">Xem ngay</button>
                    <a href="registerEvent.html"><button class="btn btn-secondary" type="button">Đăng ký</button></a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img src="user/img/path/image1.jpg" style="width: auto; height: 300px;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sự kiện 1</h5>
                    <p class="card-text">Sự kiện hấp dẫn. Hãy đăng ký tham gia sự kiện này ngay.</p>
                </div>
                <div class="d-grid gap-2 d-md-block ms-3 mb-3">
                    <button class="btn btn-primary" type="button">Xem ngay</button>
                    <a href="registerEvent.html"><button class="btn btn-secondary" type="button">Đăng ký</button></a>

                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img src="user/img/path/image1.jpg" style="width: auto; height: 300px;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sự kiện 1</h5>
                    <p class="card-text">Sự kiện hấp dẫn. Hãy đăng ký tham gia sự kiện này ngay.</p>
                </div>
                <div class="d-grid gap-2 d-md-block ms-3 mb-3">
                    <button class="btn btn-primary" type="button">Xem ngay</button>
                    <a href="registerEvent.html"><button class="btn btn-secondary" type="button">Đăng ký</button></a>
                </div>
            </div>
        </div>

    </div>
@endsection
