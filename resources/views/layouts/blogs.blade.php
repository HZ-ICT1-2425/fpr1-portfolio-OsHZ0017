<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Blog Page of Mika's HZ project" />
    <meta name="author" content="Mika van Os" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>

    @vite([ 'resources/sass/app.scss', 'resources/css/base.css', 'resources/css/blog.css'])

</head>

<body>
<x-ui.header :request="URL::current()"/>
<main>
    @yield('content')
</main>
</body>
</html>
