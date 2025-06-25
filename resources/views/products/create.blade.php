@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded shadow">
    <h2 class="text-xl font-semibold mb-4">Thêm sản phẩm mới</h2>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block">Tên sản phẩm</label>
            <input type="text" name="name" class="w-full border px-3 py-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block">Giá</label>
            <input type="number" name="price" class="w-full border px-3 py-2 rounded" required>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Lưu</button>
        <a href="{{ route('products.index') }}" class="ml-4 text-gray-600">Hủy</a>
    </form>
</div>
@endsection
