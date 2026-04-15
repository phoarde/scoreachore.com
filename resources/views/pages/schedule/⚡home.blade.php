<?php

use Livewire\Component;
use Illuminate\Support\Collection;
use App\Models\Service;



new class extends Component
{

    public $date;
    public $selectedDate;
    PUBLIC $selectedService;
    public $services;
    public $service;

    public function nount()
    {
        $this->services=Service::all();

    }
};
?>

   <div class="text-3xl p-4 font-bold text-center mt-10">
       schedule service

    <fux:card class="relative text-center  flex columns-2 column-gap-sm-4 r">
            <div class="relative border-3border-gray-2000 p-2 rounded-lg flex-col-1 items-center justify-left">
                    <flux:card class="position-absolute bg-slate-500 text-white p-4 rounded-lg">
                        <livewire:service.service-order/>
                    </flux:card>
            </div>
    </fux:card>
            <flux:callout class="position-absolute border-2 border-accent">


             <flux:input type="date" class="w-full p-2 border-b-mist-300 rounded-lg" wire:model="selectedDate"/>
                <flux:select wire:model="selectedService" label=" select your desired service:"></flux:select>
                @foreach (App\Models\Service::all() as $service)
                    <flux:select.option  class="w-full p-2 rounded-lg" wire:model="selectedService" value="{{$service->service_id}}" >{{$service->service_name}}</flux:select.option>
                @endforeach
            </flux:callout>
        </div>

    </div>

</div>

