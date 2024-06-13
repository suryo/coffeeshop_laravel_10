<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home');
    }

    public function product_details()
    {
        return view('front.product_details');
    }

    public function product_category()
    {
        return view('front.product_category');
    }
}
