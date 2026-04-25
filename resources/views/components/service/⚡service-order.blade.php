<?php

use Livewire\Component;

new class extends Component
{
    public $step=1;

        public function CompleteSetviceOrderStep($step)
        {
            return $step++;
        }

};
?>

<div>
    <flux:card class="flex-column col-1w-1/3 my-auto " >
        <x-mary-steps wire:model="step" class="border-y border-base-content/10 my-5 py-5">
            <x-mary-step step="1" text="problem report">
                ProblemReport step
            </x-mary-step>
            <x-mary-step step="2" text="create Service Order">
                createServiceOrder step
            </x-mary-step>
             <x-mary-step step="3" text="customer paid advance">
                dueToday step
            </x-mary-step>
            <x-mary-step step="3" text="Team Member Assigned " class="bg-warning/20">
                TeaMemberAssignTeam step
            </x-mary-step>
            <x-mary-step step="4" text="service performed">
                service performed step
            </x-mary-step>
            <x-mary-step step="5" text="post mortem">
                PostMortem step
            </x-mary-step>
                     </x-mary-step>
             <x-mary-step step="7" text="invoice paid" class="bg-success">
                invoicePaid step
            </x-mary-step>
            <x-mary-steps>

    </flux:card>
</div>
