<?php

use Livewire\Component;
use App\Models\Comment;
new class extends Component

{
    public string $title='';
    public string $comments='';
    public string $name='';
    public string $email='';


        public function mount():void
        {
            $this->name = auth()->user()->name;
            $this->email = auth()->user()->email;
        }

}
?>

<div class="flex flex-column columns-1">
    <div  class="bg-zinc-700 video-aspect overflow-visible">
       <flux:card icon="clockarrow-down"wire:model.live="comment">
           <x-flux:text hey!{{$this->namq}} your email still {{$this->email}}/>
           <insput type="text" name="title" placeholder="title of your comment"/>
           <input type="text" namw="comment" placeholder="whats on yor mind"/>
           dd($services);
       </flux:card>

    </div>
</div>
