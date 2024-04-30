@extends('master')
@section('title')
    Order Detail
@endsection
@section('content')
    @component('layouts.breadcrumb')
        @slot('pagetitle')
            Coffee Shop
        @endslot
        @slot('title')
            Order Detail
        @endslot
    @endcomponent
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Order Detail</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('order_details.update', $orderDetail->id) }}">
                            @csrf
                            @method('PUT')

                            <!-- Add form fields for order detail editing here -->

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
