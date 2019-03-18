<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link rel="icon" type="image/JPG" href="/img/a.JPG" />

    <title>Agata Izabela Bogacz</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
    <body>
        <header>@yield('header')</header>
        <div class="container">
            @include('utilities.messages')
            @yield('container')
        </div>
        <footer id="footer" class="text-center">
            <p>Copyright 2019 &copy; Agata Bogacz</p>
        </footer>
        @yield('script')
    </body>
</html>