<!doctype html>
    <title>My Blog</title>
    <link rel="stylesheet" href="/app.css" />

<body>
    <header>
        <!--@yield('banner')-->
        {{ $banner }}
    </header>
    <!--@yield('content')-->
    {{ $content }}
</body>



</html>