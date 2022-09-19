<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mobile\FavoriteIndexRequest;
use App\Http\Requests\Mobile\FavoriteStoreRequest;
use App\Http\Resources\HousingResource;
use App\Models\Housing;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index(FavoriteIndexRequest $request)
    {
        $housings = Housing::query()
            ->join('favorites','favorites.housing_id','housings.id')
            ->select('housings.*')
            ->paginate(15);

        return response()->json(HousingResource::collection($housings));
    }
    public function store(FavoriteStoreRequest $request)
    {
        Auth::user()->favorites()->create($request->validated());

        return response()->json(['message' => 'add']);
    }
    public function delete(Housing $housing)
    {
        Auth::user()->favorites()->where('favorites.housing_id',$housing->id)->delete();
        return response()->json(['message' => 'remove']);
    }

}
