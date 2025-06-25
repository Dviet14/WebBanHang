<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Hiển thị form tạo mới
    public function create()
    {
        return view('products.create');
    }

    // Lưu sản phẩm mới
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
    ]);
        Product::create($request->all());
        return redirect()->route('products.index')->with('success', 'Thêm sản phẩm thành công!');
    }

    // Hiển thị chi tiết sản phẩm
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // Hiển thị form chỉnh sửa
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Cập nhật sản phẩm
    public function update(Request $request, Product $product)
    {
        $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
    ]);
        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Cập nhật thành công!');
    }

    // Xóa sản phẩm
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Xóa thành công!');
    }
}
