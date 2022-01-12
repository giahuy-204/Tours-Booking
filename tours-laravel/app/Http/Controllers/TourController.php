<?php

namespace App\Http\Controllers;

use App\Http\Requests\RuleInput;
use App\Jobs\SendEmail;
use App\Models\Bills;
use App\Models\Tours;
use App\Models\TypeTours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TourController extends Controller
{
    public function index()
    {
        Session::forget('bill');
        $type_tours = TypeTours::all();
        return view('page.index', compact('type_tours'));
    }

    public function about()
    {
        return view('page.about');
    }

    public function places($type)
    {
        $type_tours = TypeTours::all();
        $type_name = TypeTours::where('id', $type)->get();
        $tours = Tours::where('id_type', $type)->get();
        return view('page.places', compact('tours', 'type_name'));
    }

    public function details(Request $request)
    {
        $tours = Tours::where('id', $request->id)->first();
        return view('page.details', compact('tours'));
    }

    public function checkout(Request $request)
    {
        $bill = Tours::where('id', $request->id)->first();
        return view('page.checkout', compact('bill'));
    }

    public function postCheckout(RuleInput $request)
    {
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

        Session::put('bill', $bill);

        //Payment
        $vnp_TmnCode = "57U1FZ9V"; //Mã website tại VNPAY
        $vnp_HashSecret = "TQIBCZEXUERWJKGJGLWFQHCLSWWOCXVZ"; //Chuỗi bí mật
        //90HVVQAH
        //RDWSGLEHAGPGPBKBDBDVSRZSNJKXGZIC
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://localhost:8000/bill_details";
        $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Book tour";
        $vnp_OrderType = 'tourpayment';
        $vnp_Amount = $request->total_price * 22690;
        $vnp_Locale = 'vn';
        $vnp_IpAddr = request()->ip();

        $vnp_BankCode = 'NCB';

        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        echo '<script>location.assign("' . $vnp_Url . '");</script>';

        //ojhqEjikwepjkeqwjasdlksac[kc,[l23]]
        $tour = Tours::where('id', $request->route('id'))->first();

        $message = [
            'type' => 'Email announce for success tour booked',
            'thanks' => 'Thanks ' . $request->last_name . " " . $request->first_name . ' for booking our tour.',
            'adult' => $request->adult_number,
            'children' => $request->children,
            'ychildren' => $request->y_children,
            'price' => $request->total_price,
            'tour' => $tour,
        ];

        SendEmail::dispatch($message, $request->email)->delay(now()->addMinute(1));

        // return redirect()->route('bill_details');
    }

    public function viewBill()
    {
        return view('page.viewbill');
    }
}
