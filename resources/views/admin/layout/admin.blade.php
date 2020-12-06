<!DOCTYPE html>
<html>
<head>
    @include('admin.layout.css')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('admin.layout.navbar')
    @include('admin.layout.sidebar')
    @yield('body')
    @include('admin.layout.footer')
</div>
@include('admin.layout.js')
</body>
</html>
