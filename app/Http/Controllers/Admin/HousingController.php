<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HousingIndexRequest;
use App\Http\Requests\Admin\HousingStoreRequest;
use App\Http\Requests\Admin\HousingUpdateRequest;
use App\Http\Requests\Mobile\AuthLoginRequest;
use App\Http\Requests\Mobile\AuthRegisterRequest;
use App\Http\Requests\Mobile\AuthRegisterVerifyRequest;
use App\Http\Resources\UserResource;
use App\Models\Housing;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;

class HousingController extends Controller
{
    function index(HousingIndexRequest $request)
    {

    }
    function store(HousingStoreRequest $request)
    {

    }
    function update(HousingUpdateRequest $request)
    {

    }
    function delete(Housing $housing)
    {

    }

}
