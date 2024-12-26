<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
    rel="stylesheet">

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
  <!-- Grid Layout -->
  <div class="p-4 max-w-5xl grid grid-cols-4 gap-4">
    <!-- This header will span 4 columns -->
    <h1 class="text-4xl font-bold col-span-4">Grid Layout Tailwind</h1>

    <!-- These are individual grid items that take one column each -->
    <div class="border border-black bg-blue-500 h-36"></div>
    <div class="col-span-2 border border-black bg-blue-500 h-36"></div>
    <div class="border border-black bg-blue-500 h-36"></div>
    <div class="border border-black bg-blue-500 h-36"></div>
    <div class="border border-black bg-blue-500 h-36"></div>
    <div class="border border-black bg-blue-500 h-36"></div>
    <div class="border border-black bg-blue-500 h-36"></div>
  </div>
</body>

</html>