<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Quotes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: #3D3B3B;
        }
    </style>
</head>

<body class="w-screen h-screen text-white flex justify-center items-center">
    <div class="absolute left-5 flex flex-col space-y-4">
        <x-button>en</x-button>
        <x-button>ka</x-button>
    </div>
    @auth
        <div class="absolute right-2 top-2">
            <x-logout-button />
        </div>
    @endauth
    {{ $slot }}
</body>

</html>
