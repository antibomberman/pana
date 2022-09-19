<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mobile\ReviewStoreRequest;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::query()
            ->paginate(15);

        return response()->json($reviews);
    }
    public function store(ReviewStoreRequest $request)
    {
        $review = Auth::user()->reviews()->create($request->validated());

        return response()->json($review);
    }
}
