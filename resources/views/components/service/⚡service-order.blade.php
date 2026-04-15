<?php

use Livewire\Component;

new class extends Component {

};
?>

<div>
    <flux:card class="border-3 border-accent text-white p-4 rounded-lg">
        <x-mary-timeline-item title="problem report" first/>

            <x-mary-timeline-item title="create service order"/>

            <x-mary-timeline-item title="solution proposal"/>

            <x-mary-timeline-item title="service order created"/>

            <x-mary-timeline-item title="service order sent"/>

            <x-mary-timeline-item class="color-yellow-300" title="Schedule service"/>

            <x-mary-timeline-item class="color-green-500 " title="customer approval S.O. date and time agreed"  />

            <x-mary-timeline-item title="service order completed"/>

            <x-mary-timeline-item title="Post mortem Review delivered"/>

            <x-mary-timeline-item title="service order delevered"/>

            <x-mary-timeline-item title="service order invoiced"/>

            <x-mary-timeline-item title="invoice paid"/>

            <x-mary-timeline-item title="customer review"/>

    </flux:card>
</div>
