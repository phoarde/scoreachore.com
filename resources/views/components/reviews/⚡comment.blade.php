<?php

use Livewire\Component;

new class extends Component {
    public string $title='';
    public  $comments='';
    public $name='';
    public $email='';
    public function mount():void
{
    $this->name= auth()->user()->name;
    $this->email-auth()->user->email;

}

};ent
?>

<div class="flwx flex-1 grid cols-02">
    <di  class="bg-zinc-700 video-aspect overflow-scrollw:h">
        <div class-"flex col-1" >
       <flux:card icon="clockarrow-down"wire:model.live="comment">
           <insput type="text" name="tltle" placeholder="title of your commemt"/>
           <input type="text-" namw="comment" placeholder="whats on yor mind"/>
        </div>

    </div>

</div>
