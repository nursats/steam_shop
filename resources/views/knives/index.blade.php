<x-app-layout>
    <div class="container mx-auto p-4 text-white">
        <h1 class="text-2xl font-bold mb-4">Каталог ножей</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($knives as $knife)
                <div class="border rounded p-4 shadow">
                    <img src="{{ asset('images/' . $knife->image) }}" alt="{{ $knife->name }}" class="w-25 h-20 object-cover mb-2">
                    <h2 class="text-xl font-semibold">{{ $knife->name }}</h2>
                    <p class="text-gray-600">{{ $knife->description }}</p>
                    <p class="text-green-600 font-bold">{{ $knife->price }} ₽</p>

                    <form action="{{ route('cart.add', $knife->id) }}" method="POST" class="mt-2">
                        @csrf
                        <button type="submit"
                            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                            Добавить в корзину
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
