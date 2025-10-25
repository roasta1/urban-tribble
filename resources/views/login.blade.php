<x-layout>
    <section class="bg-gray-100 min-h-screen flex items-center justify-center p-4" >
        <div class="w-full max-w-md bg-white p-8 rounded shadow-lg ">
            <div id="login-form" class="block ">
                <h2 class="text-2xl font-bold mb-6 text-center">Вход</h2>
                <form onsubmit="handleLogin(event)">
                    <div class="mb-4">
                    <label for="login" class="block text-gray-700 font-medium mb-2">Логин</label>
                    <input type="text" id="login" name="login" required
                        class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-6">
                    <label for="password" class="block text-gray-700 font-medium mb-2">Пароль</label>
                    <input type="password" id="password" name="password" required
                        class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition">
                    Войти
                    </button>
                    <p class="mt-4 text-red-500 text-sm" id="login-error" style="display: none;">Неверный логин или пароль.</p>
                </form>
                <p class="mt-4 text-center">
                    Еще не зарегистрированы?
                    <a href="{{ route('register') }}" onclick="showRegistration()" class="text-blue-500 hover:underline">Регистрация</a>
                </p>
            </div>
        </div>
    </section>
</x-layout>
