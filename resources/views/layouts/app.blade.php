
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - BukuPedia</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="navbar">
        <a href="{{ route('home') }}" class="logo">BukuPedia<span>.</span></a>

        <nav>
            <a href="{{ route('home') }}">Beranda</a>
            <a href="{{ route('buku.index') }}">Katalog Buku</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} BukuPedia. Temukan buku favoritmu.</p>
    </footer>
</body>
</html>
