<?php
use Livewire\Attributes\Layout;
use Livewire\Attributes\title;
use Livewire\Component;

new class extends component
{

// change
}
?>
<div class="grid  auto-rows-max gap-4 md:grid-cols-3 position-relative aspect overflow-visible rounded-xl">
    <div class="flex col-1 h-fit w-fit position-relative  border-gray-400 justify-self" >
        <livewire:service.service-order/>
    </div>
        <flux:callout icon="wrench" >
                <flux:callout.heading class="justify-content-evenlyus">Welcome to Scorerachore.com</flux:callout.heading>
                        <flux.callout.text class="text-red-500 text-xl text-justify">Please bear with us we revitalize our user interface.</flux.callout.text>
                                <flux:text class=" text-balance  text-gray-200 text-base" >Soon booking from Apple IOS and Android app will make scheduling and communicating immeasurably more intuitive, real time tracking and video as our team members complete the assigned service.  We well send you an email when its up and 100% functional. Changes happen daily SO it doesn't hurt Checks on our progress and leave     comment if there is more you would like to see. You can hover on service item to see a detailed information. If you have questions or concerns.
                            </flux:text>

                        <flux:callout.text>
                                                <a
                                                    class="sm:text-accent-blue" href="mailto:info@scoreachore.com"
                                                please email info@scorerachore.com>
                                                </a>


        </flux:callout>
    </div>

puibl
                <div class="flex col-3 h-fit w-1/3 position-relative aspect-video rounded-xl">
                    <div class="border-white border-opacity-50 ">
                        <livewire:service.service-table/>
                    </div>
                </div>

</div>




