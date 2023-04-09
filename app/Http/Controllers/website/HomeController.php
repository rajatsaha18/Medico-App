<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('website.home.home');
    }

    public function doctorCategory(){
        return view('website.category.category');
    }

    public function doctorDetails(){
        return view('website.detail.doctor-details');
    }
}
