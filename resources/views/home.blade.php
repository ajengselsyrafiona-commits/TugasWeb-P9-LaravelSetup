<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['title'] }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between">
            <a href="/" class="font-bold text-xl">Laravel App</a>
            <div class="space-x-4">
                <a href="/" class="hover:text-gray-200">Home</a>
                <a href="/about" class="hover:text-gray-200">About</a>
                <a href="/contact" class="hover:text-gray-200">Contact</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-8 p-4">
        <h1 class="text-3xl font-bold mb-4">{{ $data['title'] }}</h1>
        <p class="text-gray-700 mb-6">{{ $data['description'] }}</p>
        
        <h2 class="text-2xl font-semibold mb-3">Teknologi yang Digunakan:</h2>
        <ul class="list-disc list-inside space-y-2">
            @foreach($data['items'] as $item)
                <li class="text-gray-700">{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>