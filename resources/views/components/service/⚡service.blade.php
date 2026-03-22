<?php

use Livewire\Component;
use App\Models\Service;
new class extends Component {

    public $services;

    public function mount():void
    {
        $this->services=Service::all();

    }
};
?>

<div>
</div>
