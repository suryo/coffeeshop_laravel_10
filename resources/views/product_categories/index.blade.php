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
                    <div class="card-header">Product Categories</div>

                    <div class="card-body">
                        <a href="{{ route('product_categories.create') }}" class="btn btn-primary mb-3">Add Category</a>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->product_category_name }}</td>
                                        <td>{{ $category->status }}</td>
                                        <td>
                                            <a href="{{ route('product_categories.show', $category->id) }}" class="btn btn-primary">View</a>
                                            <a href="{{ route('product_categories.edit', $category->id) }}" class="btn btn-success">Edit</a>
                                            <!-- Add delete button if needed -->
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
