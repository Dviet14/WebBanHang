@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded shadow">
    <h2 class="text-xl font-semibold mb-4">Sửa sản phẩm</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block">Tên sản phẩm</label>
            <input type="text" name="name" value="{{ $product->name }}" class="w-full border px-3 py-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block">Giá</label>
            <input type="number" name="price" value="{{ $product->price }}" class="w-full border px-3 py-2 rounded" required>
        </div>
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Cập nhật</button>
        <a href="{{ route('products.index') }}" class="ml-4 text-gray-600">Hủy</a>
    </form>
</div>
@endsection
