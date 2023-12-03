<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CarModel;
use App\Models\Manufacturer;
use App\Models\Transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function index()
    {
        $transports = Transport::withTrashed()->with('carModel.manufacturer')->get();

        return response()->json(['transports' => $transports]);
    }
}
