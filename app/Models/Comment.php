<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'contractors_id',
        'service_id',
        'service_orders_id',
        'title',
        'comment',
        'date_of_service',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->name;
    }

    public function contractors(): BelongsTo
    {
        return $this->belongsTo(Contractors::class)->name;
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class)->service_name;
    }

    public function serviceOrders(): BelongsTo
    {
        return $this->belongsTo(ServiceOrders::class);
    }

    protected function casts(): array
    {
        return [
            'date_of_service' => 'date',
        ];
    }
}
