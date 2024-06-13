@extends('frontmaster')
@section('title')
    Product Details
@endsection
@section('content')
<a href="/home"><button class="btn btn-outline-success btn-lg mb-3"><i class="uil uil-shop"></i> Back to Home</button></a>
<h1 class="text-center mb-5">CATEGORY 1</h1>
<div class="row">
    <div class="col-4">
        <div class="card">
            <a href="/product_details">
                <img src="{{ URL::asset('/assets/images/kardus.png') }}" alt="" class="mx-auto d-block" height="300">
                <div class="card-body text-center">
                    <h5 class="mb-1 card-title" style="font-size: 20px">Product 1</h5>
                    <p class="card-text">Description</p>
                    <h5 class="mt-3 mb-0 card-title">$999</h5>
                </div>
            </a>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <a href="/product_details">
                <img src="{{ URL::asset('/assets/images/kardus.png') }}" alt="" class="mx-auto d-block" height="300">
                <div class="card-body text-center">
                    <h5 class="mb-1 card-title" style="font-size: 20px">Product 2</h5>
                    <p class="card-text">Description</p>
                    <h5 class="mt-3 mb-0 card-title">$999</h5>
                </div>
            </a>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <a href="/product_details">
                <img src="{{ URL::asset('/assets/images/kardus.png') }}" alt="" class="mx-auto d-block" height="300">
                <div class="card-body text-center">
                    <h5 class="mb-1 card-title" style="font-size: 20px">Product 3</h5>
                    <p class="card-text">Description</p>
                    <h5 class="mt-3 mb-0 card-title">$999</h5>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
@section('script')
@endsection
