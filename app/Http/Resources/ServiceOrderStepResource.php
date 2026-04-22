<?php

namespace App\Http\Resources;

use App\Models\ServiceOrderStep;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin ServiceOrderStep */ class ServiceOrderStepResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'notes' => $this->notes,
            'rate' => $this->rate,
            'hours_workeed' => $this->hours_workeed,
            'total' => $this->total,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'user_id' => $this->user_id,
            'problemReport_iid' => $this->problemReport_iid,
            'contractors_id' => $this->contractors_id,
            'service_id' => $this->service_id,
            'postMortrn_id' => $this->postMortrn_id, //
        ];
    }
}
