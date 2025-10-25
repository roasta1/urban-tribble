<x-layout>

<section class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
  <div class="w-full max-w-md bg-white p-8 rounded shadow-lg">
    <h2 class="text-2xl font-bold mb-6 text-center">Регистрация</h2>

    <form id="registration-form" onsubmit="handleSubmit(event)">
      <!-- Логин -->
      <div class="mb-4">
        <label for="login" class="block text-gray-700 font-medium mb-2">Логин (6+ символов, латиница/цифры)</label>
        <input type="text" id="login" name="login" required
          class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
          pattern="[A-Za-z0-9]{6,}">
        <p id="login-error" class="text-red-500 text-sm mt-1 hidden">Логин должен содержать минимум 6 символов (латиница/цифры)</p>
      </div>

      <!-- Пароль -->
      <div class="mb-4">
        <label for="password" class="block text-gray-700 font-medium mb-2">Пароль (8+ символов)</label>
        <input type="password" id="password" name="password" required
          class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
          minlength="8">
        <p id="password-error" class="text-red-500 text-sm mt-1 hidden">Пароль должен содержать минимум 8 символов</p>
      </div>

      <!-- ФИО -->
      <div class="mb-4">
        <label for="fio" class="block text-gray-700 font-medium mb-2">ФИО (кириллица и пробелы)</label>
        <input type="text" id="fio" name="fio" required
          class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
          pattern="[\u0400-\u04FF\s]+">
        <p id="fio-error" class="text-red-500 text-sm mt-1 hidden">ФИО должно содержать только кириллицу и пробелы</p>
      </div>

      <!-- Телефон -->
      <div class="mb-4">
        <label for="phone" class="block text-gray-700 font-medium mb-2">Телефон (8(XXX)XXX-XXXX)</label>
        <input type="tel" id="phone" name="phone" required
          class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
          placeholder="8(XXX)XXX-XXXX"
          pattern="8\(\d{3}\)\d{3}-\d{4}">
        <p id="phone-error" class="text-red-500 text-sm mt-1 hidden">Неверный формат телефона</p>
      </div>

      <!-- Email -->
      <div class="mb-6">
        <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
        <input type="email" id="email" name="email" required
          class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        <p id="email-error" class="text-red-500 text-sm mt-1 hidden">Неверный формат email</p>
      </div>

      <!-- Кнопка -->
      <button type="submit"
        class="w-full bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 transition">
        Создать пользователя
      </button>

      <!-- Сообщение об ошибке -->
      <p id="general-error" class="text-red-500 text-sm mt-4 hidden">Ошибка при регистрации. Попробуйте снова.</p>
    </form>

    <!-- Ссылка на авторизацию -->
    <p class="mt-4 text-center">
      Уже есть аккаунт?
      <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Войти</a>
    </p>
  </div>


</section>


</x-layout>
