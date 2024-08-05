<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retailer;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class RetailerController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {

        return view('contents.retailers.index');
    }

    function load(Request $request)
    {
        $param  = $request->q ? ['q' => $request->q] : [];
        $limit  = $request->limit;
        $lastId = $request->last_id;

        echo json_encode(Retailer::fetch(0, $param, $limit,  $lastId));
    }

    function approve($id)
    {

        $retailer = Retailer::fetch($id);
        $time    =  Carbon::now();
        if ($retailer) {

            $param = [
                'retailer_approved'   => 1,
            ];

            Retailer::submit($id, $param);
            Mail::send('emails.approve_retailer', ['retailer' => $retailer, ], function($message) use ($retailer) {
                $message->to($retailer->retailer_email);
                $message->subject('Your Approve Form Childrensrunway');
            });

            echo json_encode(['status' => 'success', 'message' => 'Send email.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => ' Error.']);

        }
    }
}