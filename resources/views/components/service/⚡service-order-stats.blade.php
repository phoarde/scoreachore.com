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
        <div class="flex flex-column p-5 text-xsm">
            New serviceOrders</div>
        <p claslogo.pngs="text-center">{{$serviceOrderCountNew}}</p>
        <hp class="text-xsm text-center"> total registered service Orders<br>
            {{$serviceOrderCountAll}}</hp>
    </div>
</div>
