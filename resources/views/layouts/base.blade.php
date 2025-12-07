<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
</head>
<body>
@yield('body')

<script src="/theme.js"></script>
<script src="/theme.init.js"></script>
</body>
</html>
