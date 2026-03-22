<?php

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Service;

new class extends Component {
    use WithPagination;

    public  array $headers =[[]];
    public int $perPage=4;
    public array $perPageValues=[];
    public $services;

    public function mount():void
    {
        $this->perPageValues=[4,9.14];
        $headers=[
            ['key'=>'id'],['label=.#'],
            ['key'=>'service_name', 'label'=>'Service Name'],
            ['key'=>'skill', 'label'=>'skill Name'],
        ];

        $services= Service::paginate(4)->toArray();


    }
};
?>
{{--

<div class="flex flex-col gap-4 text-center items-center px-4">
service list
    @foreach ('$services' as '$service'->Service::paginate(4) )
        <x-livewire-table::table :headers="$headers" :rows="$service" />
        @endforeach
    <livewire:pagination/>
    {{$servces->links}}
</div>
--}}
<div>

</div>
