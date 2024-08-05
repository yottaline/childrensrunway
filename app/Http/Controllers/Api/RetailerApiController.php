<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Retailer;
use Carbon\Carbon;

class RetailerApiController extends Controller
{
    function create(Request $request)
    {
        $request->validate([
            'fname'       => 'required',
            'lname'       => 'required',
            'email'      => 'required|email',
            'company'    => 'required',
        ]);

        $email = $request->email;
        $phone = $request->phone;


        if (count(Retailer::fetch(0, [['retailer_phone', $phone]]))) {
            echo json_encode(['status' => false, 'message' => __('Phone number already exists'),]);
            return;
        }

        if ($email &&  count(Retailer::fetch(0, [['retailer_email', $email]]))) {
            echo json_encode(['status' => false, 'message' => __('Email already exists'),]);
            return;
        }

        $param = [
            'retailer_f_name'     => $request->fname,
            'retailer_l_name'     => $request->lname,
            'retailer_email'      => $email,
            'retailer_phone'      => $phone,
            'retailer_company'    => $request->company,
            'retailer_country'    => $request->country,
            'retailer_city'       => $request->city,
            'retailer_address'    => $request?->address,
            'retailer_created'    => Carbon::now()
        ];


        $result = Retailer::submit(null, $param);

        echo json_encode([
            'status' => boolval($result),
            'data'   => $result ? Retailer::fetch($result) : []
        ]);
    }
}