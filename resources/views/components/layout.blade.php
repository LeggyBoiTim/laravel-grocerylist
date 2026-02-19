@props([
    'title' => 'Boodschappenlijst'
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <nav>
        <a href="/">Thuis</a>
        <a href="/about">Over Ons</a>
        <a href="/contact">Contact</a>
    </nav>
    {{ $slot }}
</body>
</html>