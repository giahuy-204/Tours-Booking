<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tours;
use App\Models\TypeTours;
use App\Models\Bills;
use App\Http\Requests\RuleInput;

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

    public function checkout(Request $request){
        $bill = Tours::where('id', $request->id)->first();
        return view('page.checkout', compact('bill'));
    }

    public function postCheckout(RuleInput $request){
        $bill = new Bills;
        $bill->first_name = $request->first_name;
        $bill->last_name = $request->last_name;
        $bill->email = $request->email;
        $bill->phone = $request->phone;
        $bill->id_tour = $request->route('id');
        $bill->date_booked = date('Y-m-d H:i:s');
        $bill->adult_number = $request->adult_number;
        $bill->children_number = $request->children;
        $bill->youngchildren_number = $request->y_children;
        $bill->total_price = $request->total_price;
        $bill->save();
    }

    public function login(){
        return view('page.login');
    }
}
