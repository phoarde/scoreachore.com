<?php
use Livewire\Attributes\Layout;
use Livewire\Component;
new class extends component
{
    //
};
?>

    <div>
        <x-auth-session-status :status="session('status')" />
        <div class= "class flex flex-column auto-rows-min flex-3 mdflex ">
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <div clasS="flex h-full w-full flex-1 flex-col  rounded-xl">
                <div class="relative aspect-video overflow-visible rounded-xl border border-neutral-200 dark:border-neutral-700">
                    <livewire:user.user-stats class="absolute inset-2 size-fit stroke-gray-900/20 dark:stroke-neutral-100/20" />
                </div>
                <div class="relative aspect-video overflow-visible float-right border border-neutral-200 dark:border-neutral-700">
                    <livewire:service.service-order-stats class="absolute inset-0 size-fit stroke-gray-900/20 dark:stroke-neutral-100/20" />
                </div>
                <div class="relative aspect-video overflow-visible float-right  rounded-xl border border-neutral-200 dark:border-neutral-700">
                    <livewire:contractor.contractor-stats class="absolute inset-0 size-fit stroke-gray-900/20 dark:stroke-neutral-100/20" />
                </div>
        </div>
        </div>
        <div class="flex h-auto w-5/7 flex-1 flex-col  rounded-xl">
            <div class="flex auto-rows-min gap-4 lg:flex-cols-2 position-relative aspect-video overflow-visable rounded-xl border border-neutral-200 dark:border-neutral-700">
                    <livewire:service.services class="position-absolute inset-0  gray-900/20 dark:accent-zinc-950-950/20" />
                </div>
                <div class="relative  aspect-video overflow-visable rounded-xl border border-neutral-200 dark:border-neutral-700">
                     <livewire:service.service-table class="absolute inset-0 stroke-gray-900/20 dark:stroke-neutral-100/20" />
                </div>
            </div>
        </div>c
    </div>
    </div>
