<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function index()
    {
        $orderDetails = OrderDetail::all();
        return view('order_details.index', compact('orderDetails'));
    }

    public function create()
    {
        return view('order_details.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // Validation rules here
        ]);

        OrderDetail::create($request->all());

        return redirect()->route('order_details.index')->with('success', 'Order detail created successfully.');
    }

    public function show(OrderDetail $orderDetail)
    {
        return view('order_details.show', compact('orderDetail'));
    }

    public function edit(OrderDetail $orderDetail)
    {
        return view('order_details.edit', compact('orderDetail'));
    }

    public function update(Request $request, OrderDetail $orderDetail)
    {
        $request->validate([
            // Validation rules here
        ]);

        $orderDetail->update($request->all());

        return redirect()->route('order_details.index')->with('success', 'Order detail updated successfully.');
    }

    public function destroy(OrderDetail $orderDetail)
    {
        $orderDetail->delete();

        return redirect()->route('order_details.index')->with('success', 'Order detail deleted successfully.');
    }
}
