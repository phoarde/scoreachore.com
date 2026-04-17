<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    protected $fillable = [
        'user_id',
        'service_orders_id',
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
        return $this->belongsTo(User::class)->id;
    }

    public function contractors_id(): BelongsTo
    {
        return $this->belongsTo(Contractors::class)->id;
    }
    public function service_id(): BelongsTo
    {
        return $this->belongsTo(Service::class)->id;
    }
    public function service_orders_id(): BelongsTo
    {
        return $this->belongsTo(ServiceOrders::class)->id;
    }
}
