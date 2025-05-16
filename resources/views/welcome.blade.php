<x-app-layout>
    <div class="container mx-auto px-4 py-16 text-center">
        <h1 class="text-4xl font-bold mb-6">Добро пожаловать в магазин ножей Steam</h1>

        <div class="space-x-4">
            <a href="{{ route('login') }}"
               class="inline-block bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 transition">
                Войти
            </a>

            <a href="{{ route('register') }}"
               class="inline-block bg-green-600 text-white px-6 py-3 rounded hover:bg-green-700 transition">
                Регистрация
            </a>

            <a href="{{ route('knives.index') }}"
               class="inline-block bg-gray-800 text-white px-6 py-3 rounded hover:bg-gray-900 transition">
                Каталог ножей
            </a>
        </div>
    </div>
</x-app-layout>
