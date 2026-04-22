<?php

namespace App\Models;

    use App\Modelds\postnortem;
    use App\Mofels\provlemReport;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class ServiceOrderStep extends Model {
        use SoftDeletes;

        protected $fillable = [
        'user_id',
        'problemReport_iid',
        'contractors_id',
        'service_id',
        'postMortrn_id',
        'notes',
        'rate',
        'hours_workeed',
        'total',
        ];

        public function user(): BelongsTo
        {
        return $this->belongsTo(User::class);
        }

        public function problemreportIid(): BelongsTo
        {
        return $this->belongsTo(provlemReport::class, 'problemReport_iid');
        }

        public function contractors(): BelongsTo
        {
        return $this->belongsTo(Contractors::class);
        }

        public function service(): BelongsTo
        {
        return $this->belongsTo(Service::class);
        }

        public function postMortrn(): BelongsTo
        {
        return $this->belongsTo(postnortem::class, 'postMortrn_id');
        }
    }
