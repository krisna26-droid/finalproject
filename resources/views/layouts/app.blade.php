<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore Project</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">
    <nav class="bg-white shadow p-4 flex gap-6">
        <a href="{{ route('books.index') }}">📚 Books</a>
        <a href="{{ route('authors.index') }}">🏆 Authors</a>
        <a href="{{ route('ratings.create') }}">⭐ Rate Book</a>
    </nav>

    <main class="p-6">
        @yield('content')
    </main>
</body>
</html>
