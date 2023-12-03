<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transport;
use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $transports = Transport::with('carModel.manufacturer')->get();

        return Inertia::render('Home', ['transports' => $transports]);
    }
}
