<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav>
        <a href="/">home</a>
        <a href="/about">about</a>
        <a href="/contact">contact</a>
    </nav>

    {{ $slot }}

</body>
</html>