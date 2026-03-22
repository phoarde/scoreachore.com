<?php

namespace App\Livewire;

use App\Models\Service;
use RamonRietdijk\LivewireTables\Livewire\LivewireTable;

class ServiceTable extends LivewireTable
{
    protected string $model = Service::class;
}
