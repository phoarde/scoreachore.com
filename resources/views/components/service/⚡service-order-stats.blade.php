<?php

use Livewire\Component;
use App\Models\ServiceOrders;
use Carbon\Carbon;

new class extends Component
{
    public $serviceOrderCountNew;
    public $serviceOrderCountAll;


    public function mount() :void
    {

        if($this->serviceOrderCountNew = \App\Models\ServiceOrders::whereDate('created_at', Carbon::today())->count() < 1) $this->serviceOrderCountNew=0;

        $this->serviceOrderCountAll=\App\Models\ServiceOrders::all()->count();

        //dd($this->serviceOrderCountAll, $this->serviceOrdersNew);
    }
};
?>

<div>
    {{-- The only way to do great work is to love what you do. - Steve Jobs --}}
    <div class="p-10 text-4xl">
        <div class="text-center">New serviceOrders</div><br>
        <p class="text-center">{{$serviceOrderCountNew}}</p>
        <br>
        <br>
        <h2 class="text-sm text-center"> total registered service Orders<br>
            {{$serviceOrderCountAll}}</h2>
    </div>
</div>
