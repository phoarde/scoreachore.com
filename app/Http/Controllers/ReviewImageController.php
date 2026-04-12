<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReviewImageResource;
use App\Models\ReviewImage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class ReviewImageController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', ReviewImage::class);

        return ReviewImageResource::collection(ReviewImage::all());
    }

    public function store(Request $request)
    {
        $this->authorize('create', ReviewImage::class);

        $data = $request->validate([
            'image' => ['required'],
            'review_id' => ['required', 'exists:reviews'],
        ]);

        return new ReviewImageResource(ReviewImage::create($data));
    }

    public function show(ReviewImage $reviewImage)
    {
        $this->authorize('view', $reviewImage);

        return new ReviewImageResource($reviewImage);
    }

    public function update(Request $request, ReviewImage $reviewImage)
    {
        $this->authorize('update', $reviewImage);

        $data = $request->validate([
            'image' => ['required'],
            'review_id' => ['required', 'exists:reviews'],
        ]);

        $reviewImage->update($data);

        return new ReviewImageResource($reviewImage);
    }

    public function destroy(ReviewImage $reviewImage)
    {
        $this->authorize('delete', $reviewImage);

        $reviewImage->delete();

        return response()->json();
    }
}
