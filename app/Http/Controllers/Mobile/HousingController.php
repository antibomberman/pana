<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mobile\HousingIndexRequest;
use App\Http\Resources\HousingIndexResource;
use App\Http\Resources\HousingResource;
use App\Http\Resources\ReviewResource;
use App\Models\Housing;

class HousingController extends Controller
{
    public function index(HousingIndexRequest $request)
    {
        $housings = Housing::query()
            ->join('countries','countries.id','housings.city_id')
            ->leftJoin('rooms','rooms.housing_id','housings.id')
            ->when($request->has('country_id'),function ($q){
                return $q->where('countries.id',request('country_id'));
            })
            ->when($request->has('city_id'),function ($q){
                return $q->where('housings.city_id',request('city_id'));
            })
            ->when($request->has('category_id'),function ($q){
                return $q->where('housings.category_id',request('category_id'));
            })
            ->when($request->has('max_adult_count'),function ($q){
                return $q->where('rooms.max_adult_count',request('max_adult_count'));
            })
            ->when($request->has('max_child_count'),function ($q){
                return $q->where('rooms.max_child_count',request('max_child_count'));
            })
            ->when($request->has('max_baby_count'),function ($q){
                return $q->where('rooms.max_baby_count',request('max_baby_count'));
            })
            ->when($request->has('max_ped_count'),function ($q){
                return $q->where('rooms.max_ped_count',request('max_ped_count'));
            })
            ->withAvg('reviews','ball')
            ->with(['images','city','city.country'])
            ->select('housings.*')
            ->paginate(15);

        return response()->json( HousingIndexResource::collection($housings));
    }

    public function show(Housing $housing)
    {
        return response()->json(new HousingResource($housing));
    }
}
