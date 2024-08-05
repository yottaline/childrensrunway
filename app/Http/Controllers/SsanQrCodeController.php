<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SsanQrCodeController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        return view('contents.scans.scan');
    }

    function scanQRCode(Request $request)
    {
        $data = json_decode($request->input('qr_code'), true);

        $visitor = Visitor::where('visitor_email', $data['email'])
                                  ->where('visitor_expiry', '>=', Carbon::now())
                                  ->first();

        if ($visitor) {
            session()->flash('Add', 'Valid QR code. Welcome!');

        } else {
            session()->flash('Error', 'Invalid or expired QR code.');
        }

        return back();
    }
}