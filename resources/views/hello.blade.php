<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello {{ $nama }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-20 text-center">
        <h1 class="text-4xl font-bold text-blue-600 mb-4">Halo, {{ $nama }}!</h1>
        <p class="text-gray-700">Selamat datang di aplikasi Laravel saya.</p>
        <a href="/" class="mt-6 inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Kembali ke Home</a>
    </div>
</body>
</html>