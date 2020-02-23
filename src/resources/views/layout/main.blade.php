<!DOCTYPE html>
<html lang="en">
<head>
    <title>¿</title>
    @include('layout.partials.head')
</head>
<body>
@include('layout.partials.nav')
@include('layout.partials.header')
@yield('content')
{{--@include('layout.partials.footer')--}}
@include('layout.partials.footer-scripts')
@yield('extra-scripts')
 </body>
</html>
