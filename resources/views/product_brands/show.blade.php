@extends('master')
@section('title')
    Product Brands
@endsection
@section('content')
    @component('layouts.breadcrumb')
        @slot('pagetitle')
            Coffee Shop
        @endslot
        @slot('title')
            Product Brands
        @endslot
    @endcomponent
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Product Brand Detail</div>

                    <div class="card-body">
                        <p><strong>Name:</strong> {{ $brand->product_brand }}</p>
                        <p><strong>Status:</strong> {{ $brand->status }}</p>
                        <a href="/productbrand" class="btn btn-secondary btn-sm position-absolute end-0"><i class="uil uil-arrow-left"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
