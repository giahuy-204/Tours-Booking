<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tours;
use App\Models\TypeTours;

class TourController extends Controller
{
    public function index(){
        $type_tours = TypeTours::all();
        return view('page.index', compact('type_tours'));
    }

    public function about(){
        return view('page.about');
    }

    public function places($type){
        $type_tours = TypeTours::all();
        $tours = Tours::where('id_type', $type)->limit(4)-> get();
        return view('page.places', compact('tours'));
    }

    public function details(Request $request){
        $tours = Tours::where('id', $request->id)->first();
        return view('page.details', compact('tours'));
    }

    public function checkout(){
        return view('page.checkout');
    }

    public function login(){
        return view('page.login');
    }
}
