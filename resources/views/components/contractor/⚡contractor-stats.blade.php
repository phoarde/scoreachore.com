<?php

use Livewire\Component;
use App\Models\Contractors;
use Carbon\Carbon;

        new class extends Component
         {
            public $ContractorsCountNew;
            public $ContractorsCountAll;

            public function mount():void
            {
                $this->ContractorsCountNew = Contractors::whereDate('created_at', Carbon::today())->count();
                if ($this->ContractorsCountNew < 1) $this->ContractorsCount = 0;
                $this->ContractorsCountAll = Contractors::all()->count();
            }
        }
?>
<div>
    {{-- The only way to do great work is to love what you do. - Steve Jobs --}}
    <div class="p-10 text-4xl">
        <div class="text-center">New Team Members</div><br>
        <p class="text-center">{{$ContractorsCountNew}}</p>
        <br>
        <br>
        <h2 class="text-sm text-center"> total registered Team Members
            {{$ContractorsCountAll}}</h2><br>
    </div>
</div>

