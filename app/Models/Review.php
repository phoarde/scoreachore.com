<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    protected $fillable = [
        'user_id',
        'contractors_id',
        'service_id',
        'serviceDate',
        'title',
        'review',
        'stars',
        'service_name',
        'showName',
    ];

    public function user_id(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function contractors_id(): BelongsTo
    {
        return $this->belongsTo(Contractors::class);
    }
}
