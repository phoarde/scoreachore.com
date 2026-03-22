<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
;use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    public $fillable = ['service_name',
        'service_description',
        'service_est_time',
        'service_rate'];

    public function skill_id(): belongsTo
    {
        return $this-> belongsTo('Skill::class');
    }
}
