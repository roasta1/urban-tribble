<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('tailwindcss.js') }}"></script>
</head>
<body class="flex flex-col h-screen">
    <header>
        <nav class="bg-gray-800 p-4">
            <div class="container mx-auto flex justify-end space-x-4">
                <!-- Пункты меню -->
                <a href="{{ route('home') }}" class="text-white hover:text-blue-400 px-3 py-2 rounded transition">Home</a>
                @guest
                    <a href="{{ route('login') }}" class="text-white hover:text-blue-400 px-3 py-2 rounded transition">Login</a>
                <a href="{{ route('register') }}" class="text-white hover:text-blue-400 px-3 py-2 rounded transition">Register</a>
                @endguest
                @auth
                    <a href="#" class="text-white hover:text-red-400 px-3 py-2 rounded transition">Exit</a>
                @endauth


            </div>
        </nav>
    </header>
    <main class="flex-grow">
        {{ $slot }}
    </main>
    <footer class="bg-gray-800 text-white py-8">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Секция "О сайте" -->
      <div>
        <h3 class="text-lg font-bold mb-4">Корочки.Есть</h3>
        <p class="text-gray-400">
          Свежие хлебобулочные изделия на любой вкус. Быстрая доставка по городу!
        </p>
      </div>

      <!-- Секция "Ссылки" -->
      <div>
        <h3 class="text-lg font-bold mb-4">Ссылки</h3>
        <ul class="space-y-2">
          <li><a href="#" class="hover:text-blue-400 transition">Главная</a></li>
          <li><a href="#" class="hover:text-blue-400 transition">Меню</a></li>
          <li><a href="#" class="hover:text-blue-400 transition">Доставка</a></li>
          <li><a href="/login" class="hover:text-blue-400 transition">Войти</a></li>
        </ul>
      </div>

      <!-- Секция "Контакты" -->
      <div>
        <h3 class="text-lg font-bold mb-4">Контакты</h3>
        <ul class="space-y-2 text-gray-400">
          <li>+7 (XXX) XXX-XX-XX</li>
          <li><a href="mailto:info@korochki.est" class="hover:text-blue-400 transition">info@korochki.est</a></li>
          <li>Город, Адрес улицы, 123</li>
        </ul>
      </div>
    </div>

    <!-- Копирайт -->
    <div class="border-t border-gray-700 mt-8 pt-4 text-center">
      <p class="text-gray-400">&copy; 2025 Корочки.Есть. Все права защищены.</p>
    </div>
  </div>
</footer>
</body>
</html>
