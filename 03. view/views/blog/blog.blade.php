<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
    <a href="{{ url('/home') }}">Home</a>
    <a href="{{ url('/blog') }}">Blog</a>
    <a href="{{ url('/about') }}">About</a>

    <article>
        <h3>Postingan Terakhir</h3>
        <p>Ini adalah contoh postingan terakhir yang dibuat.</p>
    </article>

    <article>
        <h3>Berita hari ini</h3>
        <p>Hari ini kita belajaran Framework Laravel 13 dan Tailwind.</p>
    </article>
</body>
</html>