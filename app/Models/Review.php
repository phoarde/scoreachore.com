<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    protected $fillable = [
        'user_id',
        'contractors_id',
        'title',
        'review',
        'stars',
        'pictures',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function contractors(): BelongsTo
    {
        return $this->belongsTo(Contractors::class);
    }
}
