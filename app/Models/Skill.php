<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Skill extends Model
{
 public $fillable = [

     'skill_name'
 ];

 public function service():hasMany
 {
     return $this->hasMany('Service::class')->id;
 }
}
