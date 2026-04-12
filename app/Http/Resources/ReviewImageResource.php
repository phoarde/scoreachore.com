<?php

namespace App\Http\Resources;

use App\Models\ReviewImage;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin ReviewImage */
class ReviewImageResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'image' => $this->image,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'review_id' => $this->review_id,

            'review' => new ReviewResource($this->whenLoaded('review')),
        ];
    }
}
