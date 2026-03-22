<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceRates extends Model
{
    public $fillable = ['service_id', 'skill_id', 'base_rate','hourly_rate'];
public function hourlu_rate():belongsTo
{
 return $this->belongsTo('service_id');
}
}
