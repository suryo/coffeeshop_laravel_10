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
                    <div class="card-header">Order Detail</div>

                    <div class="card-body">
                        <!-- Display order detail information here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
