<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function index()
    {
        return view('pages.frontend.home.index');
    }

    public function shop(){
        return view('pages.frontend.shop.index');
    }
}