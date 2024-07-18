<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title','Trang chủ | 24 News')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('client.layouts.partials.css')
</head>

<body>
    <header>
        @include('client.layouts.partials.header-top')
        @include('client.layouts.partials.header-nav')
    </header>

    @yield('content')

    <footer>
        @include('client.layouts.partials.footer')
    </footer>
    @include('client.layouts.partials.js')
</body>

</html>
