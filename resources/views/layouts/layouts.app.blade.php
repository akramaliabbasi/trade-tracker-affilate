<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
     <title>{{ config('app.name', 'Trade Tracker International') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Include Tailwind CSS -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- Include Bootstrap CSS if needed -->
    <!-- <link href="path/to/bootstrap.css" rel="stylesheet"> -->
    @livewireStyles
</head>
<body class="bg-gray-100">
	
    <div class="container">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif

        <main>
            @yield('content')
        </main>
    </div>
	
	 @livewireScripts
    <script src="{{ mix('js/app.js') }}"></script>
    @vite(['resources/js/app.js'])
    @vite('resources/css/app.css')
</body>
</html>
