@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Product Detail</div>

                    <div class="card-body">
                        <p><strong>SKU:</strong> {{ $product->sku }}</p>
                        <p><strong>Name:</strong> {{ $product->product_name }}</p>
                        <!-- Add other product details here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
