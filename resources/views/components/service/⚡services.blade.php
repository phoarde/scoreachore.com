<?php
namespace App\Livewire;
use Livewire\Component;
use Livewire\Attributes\computed;
use App\Models\Skill;
use App\Models\Service;
use livewire\Attributes\validate;


new class extends Component {


}
?>
<div>
    <x-auth-session-status class="mb-4 bg-green" :status="session('status')" />
    <div class=" bg-zinc-600-100 antialiased 7 dark:bg-linear-to-b dark:from-zinc-950 dark:to-zinc-600">
         <div class="sr-only">{{ config('app.name', 'scoreachore.com') }}</div>
        {{-- <div class="grid auto-rows-min gap-4 lg:grid-cols-1 ">
           <div class="bg-muted flex min-hfull flex-col max-h-full justify-left gap-6 p-6 md:p-10">--}}
                <div class="flex w-.5 max-w-md ">
            <livewire:service.new-service-form/>
            </div>
        </div>

 </div>

