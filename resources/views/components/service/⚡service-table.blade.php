<?php

namespace App\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;
use App\Models\Service;
use App\Models\Skill;

new class extends component {
    public Collection $services;
    public Collection $skills;
    public string $id;
    public string $service;
    public string $skill;

    public function mount():void
    {
        $this ->services= Service::all();
        $this ->skills=Skill::all();
//        dd($this);
    }
}
?>
{{--<div class="position-absolute flex-column col-1b my-auto w-4/6  p-4  border-3 border-gray-400 x itemd-center   ">--}}
    <table class="container position-relative overflow-auto flex-column col-1 my-auto  w-4/6  items-center" wire:model.live="$services">
        <thead>
            <tr scope="flex-col">
                <th scope="col">Id</th>
                <th scope="col">Service</th>
                <th scoppe="col" >Hourly Rate</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($services as $service)

                <tr class="  border-gray-200 2xl:border-2  text-center h" scope = "col">
                    <td class=" p-4 "><stretch>{{$service->id}}</stretch></td>
                    <td class=" p-4 " ><stretch>{{$service->service_name}}</stretch></td>
                    <td  class="p-4">{{ $service->service_rate }}</td>
            @endforeach
        </tr>
        </tbody>
    </table>
</div>
