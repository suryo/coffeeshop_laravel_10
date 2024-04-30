@extends('master')
@section('title')
    Product Categories
@endsection
@section('content')
    @component('layouts.breadcrumb')
        @slot('pagetitle')
            Coffee Shop
        @endslot
        @slot('title')
            Product Categories
        @endslot
    @endcomponent
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create Product Category</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('product_categories.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="product_category_name">Name</label>
                                <input type="text" class="form-control" id="product_category_name" name="product_category_name" required>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
