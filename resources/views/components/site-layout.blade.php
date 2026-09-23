<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50 text-gray-900">
    <header class="bg-white border-b">
        <div class="mx-auto max-w-3xl p-4">
            <a href="{{ route('welcome') }}" class="text-lg font-semibold hover:underline">PassportPlease</a>
        </div>
    </header>

    <main class="mx-auto max-w-3xl p-4">
        {{ $slot }}
    </main>

    <footer class="mx-auto max-w-3xl p-4 text-sm text-gray-500">
        PassportPlease S.A. de C.V.
    </footer>
</body>
</html>