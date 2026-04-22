<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User;

class ServiceOrders extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'contractors_id',
        'service_id',
        'dateOfService',
        'problemReport',
        'postMortem',
        'hoursWorked',
        'status',
        'images',
        'notes',
        'hourlyRate',
        'totalAmount',
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
}
