<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::all();
        return view('product_categories.index', compact('categories'));
    }

    public function create()
    {
        return view('product_categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_category_name' => 'required|string',
        ]);
        $status  = "show";
        $data    = [
            "product_category_name" => $request->product_category_name,
            "status" => $status
        ];

        ProductCategory::create($data);

        return redirect()->route('product_categories.index')->with('success', 'Product category created successfully.');
    }

    public function show(ProductCategory $category)
    {
        return view('product_categories.show', compact('category'));
    }

    public function edit(ProductCategory $category)
    {
        return view('product_categories.edit', compact('category'));
    }

    public function update(Request $request, ProductCategory $category)
    {
        $request->validate([
            'product_category_name' => 'required|string',
        ]);
        $data    = [
            "product_category_name" => $request->product_category_name
        ];

        $category->update($data);

        return redirect()->route('product_categories.index')->with('success', 'Product category updated successfully.');
    }

    public function destroy(ProductCategory $category)
    {
        $data = [
            "deleted" => true
        ];
        $category->update($data);

        return redirect()->route('product_categories.index')->with('success', 'Product category deleted successfully.');
    }
}
