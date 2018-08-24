<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Address;

class CountryController extends Controller
{
    public function getCities(Request $request)
    {
        $cities = Address::whereCompany()->where('state', $request->state)->groupBy('city')->get();

        return response()->json([
            'cities' => $cities,
            'status' => 'success'
        ]);
    }
}
