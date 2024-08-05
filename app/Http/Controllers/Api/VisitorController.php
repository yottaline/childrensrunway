<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    function submit(Request $request)
    {
        $params = [
            'visitor_name'  => $request->name,
            'visitor_email' => $request->email,
        ];

        $result = Visitor::submit(null, $params);
        echo json_encode([
            'status' => boolval($result),
            'data'   => 'ok'
        ]);
    }
}