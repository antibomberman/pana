<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mobile\RoomIndexRequest;
use App\Http\Resources\RoomResource;
use App\Models\Room;

class RoomController extends Controller
{
    public function index(RoomIndexRequest $request)
    {
        $rooms =  Room::query()
            ->where('housing_id',$request->get('housing_id'))
            ->paginate(15);

        return response()->json(RoomResource::collection($rooms));
    }
}
