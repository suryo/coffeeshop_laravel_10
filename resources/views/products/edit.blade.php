@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Product</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('products.update', $product->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="sku">SKU</label>
                                <input type="text" name="sku" id="sku" class="form-control" value="{{ $product->sku }}">
                            </div>
                            <!-- Add other form fields here -->

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
