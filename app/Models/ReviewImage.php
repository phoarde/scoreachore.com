<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReviewImage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'image',
        'review_id',
    ];

    public function review(): BelongsTo
    {
        return $this->belongsTo(Review::class);
    }
}
