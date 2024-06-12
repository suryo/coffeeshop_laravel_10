@extends('frontmaster')
@section('title')
    Cart
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card border shadow-none">
            <div class="card-body">
                <div class="d-flex align-items-start border-bottom pb-3">
                    <div class="me-4">
                        <img src="{{ URL::asset('/assets/images/product/img-1.png')}}" alt="" class="avatar-lg">
                    </div>
                    <div class="flex-1 align-self-center overflow-hidden">
                        <div>
                            <h5 class="text-truncate font-size-16"><a href="ecommerce-product-detail" class="text-dark">Nike N012 Running Shoes</a></h5>
                            <p class="mb-1">Color : <span class="fw-medium">Gray</span></p>
                            <p>Size : <span class="fw-medium">08</span></p>
                        </div>
                    </div>
                    <div class="ml-2">
                        <ul class="list-inline mb-0 font-size-16">
                            <li class="list-inline-item">
                                <a href="#" class="text-muted px-2">
                                    <i class="uil uil-trash-alt"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mt-3">
                                <p class="text-muted mb-2">Price</p>
                                <h5 class="font-size-16">$260</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mt-3">
                                <p class="text-muted mb-2">Quantity</p>
                                <div style="width: 110px;" class="product-cart-touchspin">
                                    <input data-toggle="touchspin" type="text" value="01">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mt-3">
                                <p class="text-muted mb-2">Total</p>
                                <h5 class="font-size-16">$520</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-6">
                <a href="/home" class="btn btn-link text-muted">
                    <i class="uil uil-arrow-left me-1"></i> Continue Shopping </a>
            </div> <!-- end col -->
            <div class="col-sm-6">
                <div class="text-sm-end mt-2 mt-sm-0">
                    <a href="ecommerce-checkout" class="btn btn-success">
                        <i class="uil uil-shopping-cart-alt me-1"></i> Checkout </a>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row-->
    </div>
</div>
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/ecommerce-cart.init.js')}}"></script>
@endsection
