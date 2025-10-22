<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <script src="{{ asset('tailwindcss.js')}}"></script>
</head>
<body class="flex flex-col h-screen">
    <header class="flex justify-between py-2 px-6 border-b border-b-gray-200">
        <a href="">Home</a>
        <nav class="">
<a href="">dashboard</a>
        </nav>
        <ul class="flex gap-x-4">
            <li><a href="">Register</a></li>
            <li><a href="">Login</a></li>
            <li><a href="">Logout</a></li>
        </ul>
    </header>
    <main class="flex-grow">{{ $slot }}</main>
    <footer>footer</footer>
</body>
</html>
