<?php
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\User;
new class extends component
{

}
?>

<div>
    <div class=" flex h-full w-full flex-1 flex-col  rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3 ">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <livewire:user.user-stats class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <livewire:service.service-order-stats class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video p-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <livewire:contractor.contractor-stats class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
    </div>
        <div class=" flex h-full w-full flex-1 flex-col  rounded-xl">
            <div class="grid auto-rows-min gap-4 lg:grid-cols-2 ">
                <div class="relative mt-5 aspect-video overflow-visable rounded-xl border border-neutral-200 dark:border-neutral-700">
                <livewire:service.services class="absolute inset-1 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative mt-5 h-full w-full flex-2 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                    <livewire:service.service-list class="absolute inset-1 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
    </div>
</div>
