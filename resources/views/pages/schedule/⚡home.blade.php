<?php

use Livewire\Component;
use Illuminate\Support\Collection;
use App\Models\Service;



new class extends Component
{
    public $selectedDate;
    PUBLIC $selectedService;
    public $services;

    public function nount()
    {
        $this->services=Service::all();
    }
};
?>

<div>
   <div class="text-3xl p-4 font-bold text-center mt-10">
       schedule service
   </div>
    <div class="relative text-center  flex columns-3 column-gap-sm-4 r">
            <div class="relative border-3border-gray-2000 p-2 rounded-lg flex-col-1 items-center justify-center float-start">
                    <flux:card class="position-absolute bg-slate-500 text-white p-4 rounded-lg">
                        <livewire:service.service-order/>
                    </flux:card>
            </div>
        <div class="relative border-gray-500 p-2 rounded-lg col-2 items-center float-right ">

            <flux:card class=" position-absolute border-2 border-accent">
                select your desired service date:
             <input type="date" class="w-full p-2 border-b-mist-300 rounded-lg" wire:model="selectedDate">
             </flux:card>
        </div>
        <div class="relative border-gray-500 p-2 rounded-lg col-3 items-center float-right ">

            <flux:card class=" position-absolute border-2border-accent">
                select your desired service:


                   {{-- <flux:select wire:model="$services->service_name"></flux:select>
                        @foreach ($services as $service)
                            <flux:select.option  class="w-full p-2 border-b-mist-300 rounded-lg" wire:model="selectedService" value="{{$service->service_id}}" >{{$servcice->servuce_name}}></flux:select>
                        @endforeach--}}
            </flux:card>
        </div>

    </div>

</div>

