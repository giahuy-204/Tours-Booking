<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tours;
use App\Models\TypeTours;
use App\Models\Bills;
use App\Http\Requests\RuleInput;
use App\Jobs\SendEmail;

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
        $type_name = TypeTours::where('id', $type)->get();
        $tours = Tours::where('id_type', $type)->get();
        return view('page.places', compact('tours', 'type_name'));
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
        $bill->adult_price = $request->adult_price;
        $bill->children_number = $request->children;
        $bill->children_price = $request->children_price;
        $bill->youngchildren_number = $request->y_children;
        $bill->youngchildren_price = $request->youngchildren_price;
        $bill->total_price = $request->total_price;
        $bill->save();

        //ojhqEjikwepjkeqwjasdlksac[kc,[l23]]
        $tour = Tours::where('id', $request->route('id'))->first();

        $message = [
            'type' => 'Email announce for success tour booked',
            'thanks' => 'Thanks ' . $request->last_name . " " . $request->first_name. ' for booking our tour.',
            'adult' => $request->adult_number,
            'children' => $request->children,
            'ychildren' => $request->y_children,
            'price' => $request->total_price,
            'tour' => $tour,
        ];

        SendEmail::dispatch($message, $request->email)->delay(now()->addMinute(1));

        return redirect()->route('bill_details', [$bill]);
    }

    public function viewBill(Request $request) {
        $bill = Bills::where('id', $request->id)->first();
        return view('page.viewbill', compact('bill'));
    }
}
