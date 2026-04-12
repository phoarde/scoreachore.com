<?php

use Livewire\Component;
use Livewire\Attributes\computed;
use App\Models\Skill;
use App\Models\Service;


new class extends Component
{

    public $skills;
    public $Skill_id;
    public $selectedSkill= [];
    public $services;
    public  $service_name = '';
    public $service_description= '';
    public $service_est_time='';
    public  float $service_rate=0.00;



    public function mount():void
    {
        $this->services=Service::all();
        $this->skills=Skill::all();
    }
    public function addSkill()
    {
        return $this->redirect('service.add-skill');
    }
    public function save()
    {


        if ($service=$this->services::create(
            $this->only([
                'skill_id'=> $this->selectedSkill,
                'service_name'=> $this->service_name,
                'service_description'=> $this->service_description,
                'service_est_time'=>$this->service_est_time,
                'service-rate'=>$this->service_rate,
            ]))){ dd($services);
            Session()->flash('status', 'Success');
            return redirect()->to('skills');
        }
    }
};
?>

<div class="min-h-screen bg-zinc-600-100 antialiased dark:bg-linear-to-b dark:from-zinc-950 dark:to-zinc-800">
    {{--  <div class="sr-only">{{ config('app.name', 'scoreachore.com') }}</div>
      <div class="grid auto-rows-min gap-4 lg:grid-cols-1 ">
         <div class="bg-muted flex min-hfull flex-col max-h-full justify-left gap-6 p-6 md:p-10">--}}
    <div class="flex w-svreen max-w-xlg max-h-full flex-col   gap-6">
        <div class="rounded-xl border bg-white dark:bg-zinc-800 dark:border-stone-400 text-stone-400 max-h-full shadow-xs p-4">
<x-auth-session-status class="text-green-500" :status="session('status')" />
            <h1 class="text-2xl font-bold text-center">Add or Edit Services</h1>
            <livewire:service.new-service-form />
        </div>
    </div>
</div>



