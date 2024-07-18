<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Admin | 24 News')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('admin.layouts.partials.css')

</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        @include('admin.layouts.partials.aside')
        <div class="body-wrapper">
            @include('admin.layouts.partials.header')
            <div class="container-fluid">
                @yield('content')
                @include('admin.layouts.partials.footer')
            </div>
        </div>
    </div>
    @include('admin.layouts.partials.js')
</body>

</html>
