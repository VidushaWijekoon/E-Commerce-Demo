<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.home.index');
    }

    public function category(){
        return view('pages.admin.category.index');
    }

    public function category_create (){
         return view('pages.admin.category.create');
    }
}