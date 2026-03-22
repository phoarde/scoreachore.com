<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReviewResource;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        return ReviewResource::collection(Review::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => ['nullable', 'exists:users'],
            'contractors_id' => ['nullable', 'exists:contractors'],
            'title' => ['nullable'],
            'review' => ['nullable'],
            'stars' => ['nullable', 'integer'],
            'pictures' => ['nullable'],
        ]);

        return new ReviewResource(Review::create($data));
    }

    public function show(Review $review)
    {
        return new ReviewResource($review);
    }

    public function update(Request $request, Review $review)
    {
        $data = $request->validate([
            'user_id' => ['nullable', 'exists:users'],
            'contractors_id' => ['nullable', 'exists:contractors'],
            'title' => ['nullable'],
            'review' => ['nullable'],
            'stars' => ['nullable', 'integer'],
            'pictures' => ['nullable'],
        ]);

        $review->update($data);

        return new ReviewResource($review);
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return response()->json();
    }
}
