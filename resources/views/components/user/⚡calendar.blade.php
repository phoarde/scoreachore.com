<?php

use Livewire\Component;
use App\Models\ServiceOrders
new class extends Component
{
    public date $serviceDate='';

};
?>

<div class="icon="date-picker-icon">
   <flux:input  type="date" wire:model="serviceDate" />
</div>
