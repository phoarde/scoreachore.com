<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{
    public $fillable = ['contractor_id', 'amount', 'date', 'status'];

    public function contractorId():belongsTo
    {
     return $this->belongsTo('contractors');
    }
}
