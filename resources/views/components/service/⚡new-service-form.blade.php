<?php

use App\Livewire\Forms\NewServiceForm;
use Livewire\Component;
use App\Models\Skill;
use App\Models\Service;
new class extends Component {

    public $skills;
    public $services;
    public NewServiceForm $serviceForm;



public function mount():void
{
$this->services=Service::all();
$this->skills=Skill::all();
}

public function addSkill()
{
return $this->redirect()->to('service-skills');
}
public function save()
{

$validated=$this->validate();
if( Service::create($validated))
Session()->flash('status', 'Success. a new service has been created and registered');

else  $this->addError('serviceForm.save', 'failed to create to table');
return redirect()->to('service-skills');

}
};
?>
<div>

<div class="p-2 text-center">select skill</div>
    <form wire:submit="save" class="w-150 h-130 bg-zinc-750 border-3 border-gray-400 border-shadow-white rounded-md p-4">
                    <flux:select class=" bg-gray-300 p-2" name="skill_name"  wire:model.live.blur="skill_name">
                        @foreach ($this->skills as $skill)
                            <flux:select.option class="w-0.5 h-200 p-2" value="{{ $skill->skill_id}}">{{ $skill->skill_name }}</flux:select.option>
                        @endforeach
                    </flux:select>
                    <div>@error('serviceForm.skill') {{ $message }} @enderror</div>
                    <flux:separator/>
                   <p class="p-2" >Enter a service that belongs to the selected skill</p>
                    <flux:input  class="p-2" type="text" wire:model.live.blur="serviceForm.service_name"/>
                        <div>@error('serviceForm.service_name') {{ $message }} @enderror</div>
                    Enter details or description of the service
                    <flux:input class="p-2" wire:model.live.blur="serviceForm.service_description" />
                            <div>@error('serviceForm.service_description') {{ $message }} @enderror</div>
                    Estimate time to complete the service
                    <flux:input class="p-2" wire:model.live.blur="serviceForm.service_est_time"/>
                            <div>@error('serviceForm.service_est_time') {{ $message }} @enderror</div>
                            Enter the service hourly rate
                    <flux:input class="p-2" type="dollar" wire:model="serviceForm.service_rate"/>
                           <div>@error('serviceForm.service_rate') {{ $message }} @enderror</div>
                    <flux:button type="submit" variant="primary">save</flux:button>
    </form>
             <p class="text-xs text-center text-gray-300 p-2" >Dont see the skill your looking for Add it!
                <a href="{{ route('add-skill') }}" target="_self" class="inline-block dark:bg-gray-800 dark:text-blue-400 px-2
                 hover:text-gray-300 py-1 rounded-md "
                        >Add Skill
                </a>
</div>
