<!DOCTYPE html>
<html lang="en">
    @include('user.layout.user.head')
<body>
    @include('user.layout.user.header')

    <div class="container">
        @yield('content')
    </div>
    @include('user.layout.user.footer')
</body>
</html>
