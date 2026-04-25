<?php

use Illuminate\Support\Collection;
use Livewire\Component;
use App\Models\User;
use App\Models\Contractors;
use App\Models\Service;
use App\Models\ServiceOrders;
use App\Models\Review;


new class extends component {
    public   $serviceOrders;
    public string $serviceDate = '';
    public int $user_id = 0;
    public Collection $user;
    public int $service_orders_id;
    public  $services;
    public int $service_id = 0;
    public String $service_name;
    public int $contractors_id;
    public String $contractor;
    public string $title = '';
    public string $review = '';
    public $showName = false;
    public $problemReport;
    public int $stars = 0;
    public int $serviceOrdersCount=0;


    public function mount()
    {
        $this->user_id = auth()->user()->id;
        $this->user = User::all()->where('id', $this->user_id);
        $this->services = Service::all();

        $this->serviceOrders=ServiceOrders::first();

         if (($this->serviceOrdersCount <= 0) or ($this->serviceOrdersCount == null)) return redirect()->to('⚡comment');
        $this->serviceOrders = ServiceOrders::whereUserId($this->user_id);
        $this->serviceOrdersCount=$this->serviceOrders->count();



    }



    public function add()
    {
        if (App\Models\Review::create([
            'title' => $this->title,
            'stars' => $this->stars,
            'review' => $this->review,
            'problem report' => $this->serviceOrders->problemReport,
            'service_orders_id' => $this->service_orders_id,
            'service_id'=>$this->service_id,
            'serviceDate' => $this->serviceDate,
    ])) {
        $this->reset();
        session()->flash('review posted successfully');
        return redirect()->to('reviews.home');
    }
}

    public function uploadedImages()
    {
        foreach ($images as $image)
            return $image;

    }




}
?>
<div class="flex flex-column flex-wrap columns-1 gap-4 ">

    <div
        class="relative aspect-video overflow-visable rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">

        <form>
            <flux:input type="date" label="Service Date" wire:model="serviceDate"/>


            <flux:separator></flux:separator>
            <flux:select class=" p-4 bg-gray-300 " name="problemReport" label="Select a service order to review"
                         wire:model.live.blur="servicesOrders">
                    @foreach ($this->serviceOrders as $serviceOrder)
                        <flux:select.option class="w-0.5 h-200 p-4"
                                            value="{{$serviceOrder['id']}}">{{ $serviceOrder->$problemReport }}</flux:select.option>
                    @endforeach
                </flux:select>
                <flux:separator></flux:separator>
            <flux:select class=" p-4 bg-gray-300 " name="service_name" label="Select a service to review"
                         wire:model.live.blur="service_id">
                @foreach ($this->services as $service)
                    <flux:select.option class="w-0.5 h-200 p-4"
                                        value="{{ $service->id}}">{{ $service->service_name }}</flux:select.option>
                @endforeach
            </flux:select>

            <flux:input type="text" label="Title" wire:model="title"/>
            <flux:input type="text" icon="star" label="stars" wire:model="stars"/>
            <flux:textarea label="Review" wire:model="review"/>
            <flux:input.file type="file" multiple wire:model="" class="p-2"/>

            <flux:checkbox class="p-10" label="I would like to keep my name out of this review" wire:model="showName"/>
            <flux:button variant="primary" icon="arrow-uturn-left" class="float-right" wire:click="add()">post review
            </flux:button>
            <flux:button variant="outline" icon="minus-circle" class="p-10" wire:click="{{$this->reset()}}">reset form
            </flux:button>

        </form>
        <flux:callout icon="information-circle" color="blue" class="mt-4 p-6 text-center">
            To write a review, you must be registered user with a completed service order that you would like to review.<br>
            You can only write one review per service order.
            <br>
            But anyone can write a comment about just about anything.
        </flux:callout>
    </div>
    <flux:callout icon="megaphone" color="yellow" class="mt-4 p-6">Thank you for your review! Your feedback is valuable
        to us.
    </flux:callout>
    <flux:callout icon="megaphone" color="yellow" class="mt-4 p-6">
        {{--<livewire:reviews.review-list/>--}}
    </flux:callout>
</div>
</div>
