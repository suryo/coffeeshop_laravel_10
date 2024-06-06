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
                        <a href="/product" class="btn btn-secondary btn-sm mb-3"><i class="uil uil-arrow-left"></i> Back</a>
                        <a href="{{ route('product_categories.create') }}" class="btn btn-success btn-sm mb-3"><i class="uil uil-plus"></i> Add Category</a>

                        <table id="table" class="table display">
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
                                            <a href="{{ route('product_categories.show', $category->id) }}" class="btn btn-primary btn-sm">View</a>
                                            <a href="{{ route('product_categories.edit', $category->id) }}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="{{ route('product_categories.delete', $category->id) }}" class="btn btn-danger btn-sm">Delete</a>
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
@section('script')
<script>
    const table = new DataTable('#table',{});
</script>
@endsection