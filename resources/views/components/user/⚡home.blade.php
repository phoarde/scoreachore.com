<?php
use Livewire\Attributes\Layout;
use Livewire\Attributes\title;
use Livewire\Component;

new class extends component
{
    //
};
?>
<div>
        <div class="flex h-full w-full flex-1 flex-col  rounded-xl">
        </div>
        <div class="flex h-full w-full flex-1 flex-col  rounded-xl">
            <div class="grid  auto-rows-min gap-4 lg:grid-cols-2 ">
                <div class="relative  aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                    <livewire:service.service-table class="absolute inset-0  stroke-gray-900/20 dark:stroke-neutral-100/20" />
                </div>
                <div class="relative  aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                    <livewire:user.calendar class="absolute inset-0 stroke-gray-900/20 dark:stroke-neutral-100/20" />
                </div>
            </div>
        </div>
    </div>

</div>
