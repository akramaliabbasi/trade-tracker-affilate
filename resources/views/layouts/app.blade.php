<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
     <title>{{ config('app.name', 'Trade Tracker International') }}</title>
    <meta charset="utf-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

    
    <!-- Include Tailwind CSS -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- Include Bootstrap CSS if needed -->
    <!-- <link href="path/to/bootstrap.css" rel="stylesheet"> -->
    @livewireStyles
</head>

<body class="font-sans antialiased bg-gray-100">
	
    <div class="container">
      

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
