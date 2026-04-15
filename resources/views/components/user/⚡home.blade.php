<?php
use Livewire\Attributes\Layout;
use Livewire\Attributes\title;
use Livewire\Component;

new class extends component

{
    //
}
?>

<div class="position-absolute columns-3 rounded-xl">
    <div class="position-relative min-h-screen border-gray-400 justify-self-start" >
        <livewire:service.service-order/>
    </div>
        <flux:callout icon="wrench" class="space-y-0 position-absolute min-h-screen border-2 overflow-visible border-amber-800">
                <flux:callout.heading class="text-center">Welcome to Scorerachore.com</flux:callout.heading>
                        <flux.callout.text class="text-red-500 text-xl text-center">Please bear with us we revitalize our user interface.</flux.callout.text>
                            <flux:text class=" text-center text-gray-200 text-base" >Soon booking from Apple IOS and Android app will make scheduling and communicating immeasurably more intuitive, real time tracking and video as our team members complete the assigned service.  We well send you an email when its up and 100% functional. Changes happen daily SO it doesn't hurt Checks on our progress and leave     comment if there is more you would like to see. You can hover on service item to see a detailed information. If you have questions or concerns.
                        </flux:text>

                                                <a
                                                    class="sm:text-accent-blue" href="mailto:info@scoreachore.com"
                                                please email info@scorerachore.com>
                                                </a>


        </flux:callout>

                <div class="position-relative h-auto w-auto  col-3  rounded-xl">
                    <div class="border-white border-opacity-50 ">
                        <livewire:service.service-table/>
                    </div>
                </div>

</div>




