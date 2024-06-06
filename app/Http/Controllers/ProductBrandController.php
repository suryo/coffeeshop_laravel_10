<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class ProductBrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('product_brands.index', compact('brands'));
    }

    public function create()
    {
        return view('product_brands.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_brand' => 'required|string',
        ]);
        $status  = "show";
        $data    = [
            "product_brand" => $request->product_brand,
            "status" => $status
        ];

        Brand::create($data);

        return redirect()->route('product_brands.index')->with('success', 'Product brand created successfully.');
    }

    public function show(Brand $brand)
    {
        return view('product_brands.show', compact('brand'));
    }

    public function edit(Brand $brand)
    {
        return view('product_brands.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'product_brand' => 'required|string',
        ]);
        $data    = [
            "product_brand" => $request->product_brand
        ];

        $brand->update($data);

        return redirect()->route('product_brands.index')->with('success', 'Product brand updated successfully.');
    }

    public function destroy(Brand $brand)
    {
        $data = [
            "deleted" => true
        ];
        $brand->update($data);

        return redirect()->route('product_brands.index')->with('success', 'Product brand deleted successfully.');
    }
}
