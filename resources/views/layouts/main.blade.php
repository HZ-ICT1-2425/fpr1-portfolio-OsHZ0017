<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Home Page of Mika's HZ project" />
    <meta name="author" content="Mika van Os" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>

    @vite('resources/css/base.css')
    @yield('css')

    @yield('head')

</head>
<body>
<x-ui.header/>
<main>
    @yield('content')
</main>
    @yield('foot')
</body>
</html>
