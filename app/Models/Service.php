<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    public $fillable = [
        'skill_id',
        'service_name',
        'service_description',
        'service_est_time',
        'service_rate'];

    public function skill_id(): hasOne
    {
        return $this-> hasOne('Skill::class')->id;
    }
}

