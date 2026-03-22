<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Boost\Install\Skill;

class Contractors extends Model
{
    public $fillable = ['name', 'social_security', 'email', 'phone', 'address', 'city', 'state', 'zip', 'country', 'skills'];

    public function skills(): hasMany
    {
        return $this->hasMany('Skill::class');
    }


}
