<?php

use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Skill;

new class extends Component {
    public Collection $skills;
    #[validate('required|unique:skills|min:3')]
    public string $skill_name;

    public function close()
    {
        $this->close();
    }
    public function addSkill()
    {
        if ($validated = $this->validate()) {
            if (Skill::create($validated)) {
               session()->flash('status', 'Success! a new skill has been created.');
                $this->reset();
                return redirect()
                    ->to('add-skill')
                    ->with('status','success');
            }
        }

    }
};
?>
<div>
    <div class="flex h-full w-full flex-1 flex-col  rounded-xl">
        <div class="grid  auto-rows-min gap-4 lg:grid-cols-2 ">
            <div class="relative aspect-video overflow-visible rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
                <form>
                    <flux:callout icon="wrench-screwdriver" color="zinc" class="p-4 bg-zinc-700 rounded-lg shadow-lg text-center ">
                        Add a new skill
                            <flux:input type="text" class="mt-10text-zinc-800 p-4" wire:model.live.blur="skill_name" placeholder="Enter skill name"/>
                            <flux:button variant="subtle" size="sm" class=" float-end" wire:click="close()">cancel</flux:button>
                            <flux:button variant="subtle" size="sm" wire:click="addSkill()">Add Skill</flux:button>
                    </flux:callout>
                </form>
            </div>
        </div>
    <div class=bg-red-500">@error('serviceForm.skill') {{ $message }} @enderror</div>
</div>
</div>
