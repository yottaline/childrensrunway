<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage as FacadesStorage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class VisitorController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        return view('contents.visitors.index');
    }

    function load(Request $request)
    {
        $limit   = $request->limit;
        $lastId  = $request->last_id;

        echo json_encode(Visitor::fetch(0,null, $limit, $lastId));
    }

    function approveRequest($visitorId)
    {

        $visitor = Visitor::fetch($visitorId);
        $time    =  Carbon::now();
        if ($visitor) {

            $data = [
                'email' => $visitor->visitor_email,
                'expiry_date' => $time,
            ];

            $qrCode = QrCode::size(200)->generate(json_encode($data));

            $filePath = 'qrcodes/' . $visitor->visitor_name . '.png';
            FacadesStorage::put($filePath, $qrCode);

            $param = [
                'visitor_approved' => 1,
                'visitor_expiry'   => $time,
            ];

            Visitor::submit($visitorId, $param);
            Mail::send('emails.qrcode', ['visitor' => $visitor, 'filePath' => $filePath, 'qr_code' => $qrCode], function($message) use ($visitor, $filePath) {
                $message->to($visitor->visitor_email);
                $message->subject('Your QR Code');
                $message->attach(FacadesStorage::path($filePath));
            });

            echo json_encode(['status' => 'success', 'message' => 'QR code sent to visitor\'s email.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Visitor not found.']);
            // return response()->json();
        }
    }

}