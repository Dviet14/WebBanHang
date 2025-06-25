<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quản lý sản phẩm') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <a href="{{ route('products.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
                    Thêm sản phẩm
                </a>

                @if (session('success'))
                    <div class="text-green-600 mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table-auto w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border px-4 py-2">Tên sản phẩm</th>
                            <th class="border px-4 py-2">Giá</th>
                            <th class="border px-4 py-2">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td class="border px-4 py-2">{{ $product->name }}</td>
                                <td class="border px-4 py-2">{{ number_format($product->price) }} đ</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('products.edit', $product) }}" class="text-blue-500 hover:underline">Sửa</a> |
                                    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Xóa sản phẩm này?')">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>

