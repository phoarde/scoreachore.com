<?php

use Livewire\Component;
use App\Models\User;
use Carbon\Carbon;

new class extends Component
{

    public $userCountNew;
    public $userCountAll;

    public function mount(): void
    {
        $this->userCountNew=User::whereDate('created_at', Carbon::today())->count();
        if ($this->userCountNew< 1) $this->userCountNew=0;

        $this->userCountAll=App\Models\User::count();
        //dd($this->userCountAll, $this->userCountNew);

    }

};



?>
<div>
    {{-- The only way to do great work is to love what you do. - Steve Jobs --}}
    <div class="p-5 text-xl">
        <div class="text-center">New Users</div><br>
        <p class="text-center">{{$userCountNew}}</p>
        <br>
        <br>
        <h2 class="text-sm text-center"> total registered users<br>
            {{$userCountAll}}</h2>
    </div>
</div>
