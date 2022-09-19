<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mobile\UserUpdateRequest;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user();

        return response()->json(new UserResource($user));
    }

    public function update(UserUpdateRequest $request)
    {
        $user = Auth::user()->update($request->validated());

        return response()->json(new UserResource($user));
    }
}
