<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Home Page of Mika's HZ project" />
    <meta name="author" content="Mika van Os" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ $title }}</title>

    @vite(['resources/css/base.css', 'resources/css/index.css'])

</head>
<body>
<x-ui.header></x-ui.header>
<main>
    {{ $slot }}
</main>
</body>
