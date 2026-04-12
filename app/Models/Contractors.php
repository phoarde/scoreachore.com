<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Boost\Install\Skill;

class Contractors extends Model
{
    public $fillable = ['name',
        'ssn',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'zip',
        'country',
        'DriversLicenseNumber',
        'DriversLicenseState',
        'DriversLicenseExp',
        'dob',
        'skills'];

public array $skills;
    public function invoices(): hasMany
    {
        return $this->hasMany('Invoice::class');
    }
    public function getSkillsAttribute($value)
    {
        return json_decode($value, true);
    }
    public function user_id(): hasOne
    {
        return $this -> hasOne('User::class');
    }

    public function skills(): hasMany
    {
        return $this->hasMany('Skill::class');
    }


}
