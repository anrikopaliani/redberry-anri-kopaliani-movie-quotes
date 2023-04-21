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
            background: radial-gradient(50% 50% at 50% 50%, #4E4E4E 0%, #3D3B3B 99.99%, #3D3B3B 100%);
            overflow-x: hidden;
        }
    </style>
</head>

<body class="w-screen h-screen text-white flex justify-center items-center">
    <div class="absolute left-5 flex flex-col space-y-4">
        <x-language-switcher />
    </div>
    @guest
        @if (!request()->routeIs('login.get'))
            <div class="absolute right-2 top-2 text-white">
                <a href="{{ route('login.get') }}">{{ __('messages.LOG IN') }}</a>
            </div>
        @endif
    @endguest

    @auth
        <div class="absolute right-2 top-2">
            <x-logout-button />
        </div>
    @endauth
    <div class="flex flex-col">
        {{ $slot }}
    </div>
</body>

</html>
