<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PwrtagController extends Controller
{
    public function register(Request $request)
    {
        return response()->json(Response::HTTP_ACCEPTED);
    }
}
