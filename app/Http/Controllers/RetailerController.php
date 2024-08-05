<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retailer;

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
}