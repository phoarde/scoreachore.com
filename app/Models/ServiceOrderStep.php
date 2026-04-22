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
        'problemReport_id',
        'contractors_id',
        'service_id',
        'postMorton_id',
        'notes',
        'rate',
        'hours_worked',
        'total',
    s    ];

        public function user_id(): BelongsTo
        {
                return $this->belongsTo(User::class);
        }

        public function problemReport_id(): BelongsTo
        {
        return $this->belongsTo(ServiceOrders::class, 'id');
            }

         public function contractors_id(): BelongsTo
        {
             return $this->belongsTo(Contractors::class,'id');
        }

        public function service(): BelongsTo
        {
             return $this->belongsTo(Service::class, 'id');
        }

        public function postMortrn_id(): BelongsTo
        {
            return $$this-$this->belongsTo(ServiceOrders::'id');
        }
        public function servive_orders_id(): BelongsTo
        {
            return $this->belongsTo(ServiceOrders::('id');
          }
    }
