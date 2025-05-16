<x-app-layout>
    <div class="container mx-auto p-4 text-white">
        <h1 class="text-2xl font-bold mb-4">Ваша корзина</h1>

        @if(session('success'))
            <div class="mb-4 p-2 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if($items->isEmpty())
            <p>Корзина пуста.</p>
        @else
            <table class="w-full border-collapse">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">Название</th>
                        <th class="border px-4 py-2">Цена</th>
                        <th class="border px-4 py-2">Количество</th>
                        <th class="border px-4 py-2">Итого</th>
                        <th class="border px-4 py-2">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td class="border px-4 py-2">{{ $item->knife->name }}</td>
                            <td class="border px-4 py-2">{{ $item->knife->price }} ₽</td>
                            <td class="border px-4 py-2">{{ $item->quantity }}</td>
                            <td class="border px-4 py-2">{{ $item->knife->price * $item->quantity }} ₽</td>
                            <td class="border px-4 py-2">
                                <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Удалить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-app-layout>
