@extends('frontmaster')
@section('title')
    Home
@endsection
@section('content')
    <div class="row">
        <div class="col-8">
            <div class="card" style="background-color: rgb(100, 100, 100)">
                <div id="carousel-product" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="{{ URL::asset('/assets/images/kardus.png') }}" alt="..."
                                class="d-block mx-auto" height="420">
                            <div class="carousel-caption d-none d-md-block text-black-50">
                                <h5 class="text-black">First slide label</h5>
                                <p>Penjelasan 1</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ URL::asset('/assets/images/kardus.png') }}" alt="..."
                                class="d-block mx-auto" height="420">
                            <div class="carousel-caption d-none d-md-block text-black-50">
                                <h5 class="text-black">Second slide label</h5>
                                <p>Penjelasan 2</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ URL::asset('/assets/images/kardus.png') }}" alt="..."
                                class="d-block mx-auto" height="420">
                            <div class="carousel-caption d-none d-md-block text-black-50">
                                <h5 class="text-black">Third slide label</h5>
                                <p>Penjelasan 3</p>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-product" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" style="color: black" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-product" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="background-color: rgb(100, 100, 100)">
                <img src="{{ URL::asset('/assets/images/kardus.png') }}" class="d-block mx-auto" height="200">
            </div>
            <div class="card" style="background-color: rgb(100, 100, 100)">
                <img src="{{ URL::asset('/assets/images/kardus.png') }}" class="d-block mx-auto" height="200">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <div class="card border border-3 border-dark">
                <a class="btn btn-light" href="#" role="button"><i class="uil-amazon" style="font-size: 50px"></i></a>
            </div>
            <div class="card border border-3 border-dark">
                <a class="btn btn-light" href="#" role="button"><i class="uil-amazon" style="font-size: 50px"></i></a>
            </div>
            <div class="card border border-3 border-dark">
                <a class="btn btn-light" href="#" role="button"><i class="uil-amazon" style="font-size: 50px"></i></a>
            </div>
            <div class="card border border-3 border-dark">
                <a class="btn btn-light" href="#" role="button"><i class="uil-amazon" style="font-size: 50px"></i></a>
            </div>
            <div class="card border border-3 border-dark">
                <a class="btn btn-light" href="#" role="button"><i class="uil-amazon" style="font-size: 50px"></i></a>
            </div>
            <div class="card border border-3 border-dark">
                <a class="btn btn-light" href="#" role="button"><i class="uil-amazon" style="font-size: 50px"></i></a>
            </div>
            <div class="card border border-3 border-dark">
                <a class="btn btn-light" href="#" role="button"><i class="uil-amazon" style="font-size: 50px"></i></a>
            </div>
            <div class="card border border-3 border-dark">
                <a class="btn btn-light" href="#" role="button"><i class="uil-amazon" style="font-size: 50px"></i></a>
            </div>
            <div class="card border border-3 border-dark">
                <a class="btn btn-light" href="#" role="button"><i class="uil-amazon" style="font-size: 50px"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <img src="{{ URL::asset('/assets/images/kardus.png') }}" alt="" class="mx-auto d-block" height="300">
                <div class="card-body text-center">
                    <h5 class="mb-1 card-title" style="font-size: 20px">Product 1</h5>
                    <p class="card-text">Description</p>
                    <h5 class="mt-3 mb-0 card-title">$999</h5>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <img src="{{ URL::asset('/assets/images/kardus.png') }}" alt="" class="mx-auto d-block" height="300">
                <div class="card-body text-center">
                    <h5 class="mb-1 card-title" style="font-size: 20px">Product 2</h5>
                    <p class="card-text">Description</p>
                    <h5 class="mt-3 mb-0 card-title">$999</h5>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <img src="{{ URL::asset('/assets/images/kardus.png') }}" alt="" class="mx-auto d-block" height="300">
                <div class="card-body text-center">
                    <h5 class="mb-1 card-title" style="font-size: 20px">Product 3</h5>
                    <p class="card-text">Description</p>
                    <h5 class="mt-3 mb-0 card-title">$999</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')  
@endsection
