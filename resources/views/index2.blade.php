<!DOCTYPE html>
<html lang="en">

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

<body class="">
    <div class="flex flex-row justify-center items-center h-svh border p-11 content-evenly space-x-10">
        <div class="border flex">
            TESTING FLEXBOX
            <div>haha</div>
            <div>haha</div>
        </div>
        <div class="border">
            TESTING FLEXBOX

        </div>
    </div>


    <div class="flex-container">
        <!-- Immediate children (flex items) -->
        <div class="flex-item">Item 1</div>
        <div class="flex-item w-96">
            <!-- Nested elements -->
            <div class="nested-item w-16">Nested Item</div>
            <div class="nested-item w-16">Nested Item</div>
        </div>
    </div>
</body>

</html>