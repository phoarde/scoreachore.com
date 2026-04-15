<?php

use Livewire\Component;




new class extends Component {
public string $name;
public string $email;
public $message;


public function mount()
{
$this->name=auth()->user()->name;
$this->email=auth()->user()->email;
}
public function send($message)

    {
        dispatch(new ContactUsMessage($message));
}

};
?>

<div class="flex h-full w-full flex-1 flex-col  rounded-xl">
     <div class="grid  auto-rows gap-4 lg:grid-cols-3 ">
         <div class="relative col-2 aspect-video overflow-visable rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">       <flux:legend>Contact Us</flux:legend>
             <x-mary-card>      Send s a note.
             <flux:callout icon="megaphone" color="yellow" class="mt-4 p-6">
                {{$name}} {{$email}}   <br><br>
        Hey {{ $name }}!
        Tell us whats on your mind....
        <flux:textarea class=" min-vh-1/2 " wire:model="message"></flux:textarea>
                 <flux:button class="mt-4" wire:click="send()">Submit</flux:button>
             </flux:callout>
    </x-mary-card>
   </div>


    </div>
</div>
