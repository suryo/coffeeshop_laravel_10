@extends('frontmaster')
@section('title')
    Product Details
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="product-img">
                                <img src="{{ URL::asset('/assets/images/kardus.png') }}" alt="" class="mx-auto d-block" height="300">
                            </div>
                            <div class="row text-center mt-2">
                                <div class="col-sm-6 d-grid">
                                    <button type="button"
                                        class="btn btn-primary btn-block waves-effect waves-light mt-2 me-1">
                                        <i class="uil uil-shopping-cart-alt me-2"></i> Add to cart
                                    </button>
                                </div>
                                <div class="col-sm-6 d-grid">
                                    <button type="button"
                                        class="btn btn-light btn-block waves-effect  mt-2 waves-light">
                                        <i class="uil uil-shopping-basket me-2"></i>Buy now
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="mt-4 mt-xl-3 ps-xl-4">
                                <h5 class="font-size-14"><a href="#" class="text-muted">Category</a></h5>
                                <h4 class="font-size-20 mb-3">Product Name</h4>
                                <h5 class="mt-4 pt-2">$999</h5>
                                <p class="mt-4 text-muted">Product Description............</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
