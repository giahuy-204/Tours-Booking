<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tours;
use App\Models\TypeTours;

class TourController extends Controller
{
    public function index(){
        return view('page.index');
    }

    public function places(){
        return view('page.places');
    }

    public function details(){
        return view('page.details');
    }

    public function checkout(){
        return view('page.checkout');
    }

    public function login(){
        return view('page.login');
    }
}
