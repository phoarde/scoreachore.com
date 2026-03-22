<?php

use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Skill;

new class extends Component {
    public Collection $skills;
    #[validate('required|unique:skills|min:3')]
    public string $skill;


    public function addSkill()
    {
        if ($validated = $this->validate()) {
            if (Skill::create($validated)) {
                session()->flash('status', 'Success');
                $this->reset();
                return redirect()->to('add-skill');
            }
        }
        dd($validated);
    }
};
?>

<div class="p-4 bg-gray-400 rounded-lg shadow-lg text-center text-2xl text-gray-700">
    Add a new skill
    <flux:input type="text" class="min-h-1 p-4" wire:model.live.blur="skill" placeholder="Enter skill name"/>
    <flux:button wire:click="$addSkill()">Add Skill</flux:button>
    <div>@error('serviceForm.skill') {{ $message }} @enderror</div>
</div>
