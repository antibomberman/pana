<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $cities = City::query()
            ->whereCountryId($request->get('country_id'))
            ->orderBy('name')
            ->get();

        return response()->json($cities);
    }
}
