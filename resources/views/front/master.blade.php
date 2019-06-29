<!Doctype html>
<html lang=zh-TW>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    @include('front.header')
    @yield('content')
</body>
</html>