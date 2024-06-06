<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use App\Models\ProductCategory;
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
        $brands = Brand::all();
        $categories = ProductCategory::all();
        return view('products.create', compact('brands','categories'));
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
        ]);
        $data = [
            "sku" => $request->sku,
            "product_category" => $request->product_category,
            "product_name" => $request->product_name,
            "product_detail" => $request->product_detail,
            "product_brand" => $request->product_brand,
            "product_price" => $request->product_price,
            "status" => "show",
            "slug" => $request->product_name
        ];

        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $brands = Brand::all();
        $categories = ProductCategory::all();
        $brand_name = Brand::where("id",$product->product_brand)
                    ->get();
        $category_name = ProductCategory::where("id",$product->product_category)
                    ->get();
        return view('products.edit', compact('product','brands','categories','brand_name','category_name'));
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
            'fileimages' => 'nullable|string'
        ]);
        $data = [
            "sku" => $request->sku,
            "product_category" => $request->product_category,
            "product_name" => $request->product_name,
            "product_detail" => $request->product_detail,
            "product_brand" => $request->product_brand,
            "product_price" => $request->product_price
        ];

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
