<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactUsMessage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}
