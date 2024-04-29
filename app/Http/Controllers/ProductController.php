<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'sku' => 'required|string',
            'product_category' => 'required|integer',
            'product_name' => 'required|string',
            'product_detail' => 'required|string',
            'product_brand' => 'required|integer',
            'product_price' => 'required|integer',
            'fileimages' => 'nullable|string',
            'status' => 'required|string',
            'deleted' => 'required|in:true,false',
            'slug' => 'required|string',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'sku' => 'required|string',
            'product_category' => 'required|integer',
            'product_name' => 'required|string',
            'product_detail' => 'required|string',
            'product_brand' => 'required|integer',
            'product_price' => 'required|integer',
            'fileimages' => 'nullable|string',
            'status' => 'required|string',
            'deleted' => 'required|in:true,false',
            'slug' => 'required|string',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
