<?php

use Illuminate\Support\Collection;
use Livewire\Component;
use App\Models\User;
use App\Models\Contractors;
use App\Models\Service;
use App\Models\ServiceOrders;
use App\Models\Review;


new class extends component {
    public string $serviceDate='';
    public int $user_id=0;
    public Collection $user;
    public  $serviceOrders;
    public Collection $services;
    public int $service_id=0;
    public String $service_name;
    public int $contractors_id;
    public String $contractor;
    public string $title = '';
    public string $review = '';
    public $showName=false;
    public int $stars=0;
  //




    public function mount(): void

    {
        $this->serviceOrders=ServiceOrders::where('user_id', $this->user_id)->latest();
        $this->user_id = auth()->user()->id;
        $this->user=User::all()->where('id', $this->user_id);
        $this->services=Service::all();
      /*  $this->contractors_id=$this->serviceOrders->contractors_id;
        $this->service_id=$this->serviceOrders->service_id;*/

    }


public function add()
{

//    dd($this->title, $this->review);
    if (App\Models\Review::create([

        'title' => $this->title,
        'stars'=> $this->stars,
        'review' => $this->review,
        'service_id'=>$this->service_id,
        'serviceDate' => $this->serviceDate,
    ])) {
        $this->reset();
        session()->flash('review posted successfully');
        return redirect()->to('dash');
    }
}
public function uploadedImages()
{
    foreach ($images as $image)
        return $image;

}

}
?>
<div class="flex h-full w-full flex-1 flex-col  rounded-xl">
    <div class="grid  auto-rows-min gap-4 lg:grid-cols-2 ">
        <div class="relative aspect-video overflow-visible rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
            <flux:callout icon="megaphone" color="yellow" class="mt-4 p-6">
                Please tell us about your experience with our service with a review, we added the ability of reviewers
                to add pictures to their reviews.

                Ask us a question or share your thoughts in a comments.
            </flux:callout>
            <flux:callout icon="information-circle" color="blue" class="mt-4 p-6 text-center">
                To write a review, you must be registered user with a completed service order that you would like to review.<br>
                <br>
                But anyone can write a comment about just about anything.
            </flux:callout>
            <flux:callout icon="information-circle" color="blue" class="mt-4 p-6 text-center">
                You can only write one review per service order.
            </flux:callout>
        </div>
        <div class="relative aspect-video overflow-visable rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">

            <form>
                        <flux:input type="date" label="Service Date" wire:model="serviceDate"/>
                <flux:select class=" p-4 bg-gray-300 p-2" name="service_name" label="Select a service to review" wire:model.live.blur="service_id">
                    @foreach ($this->services as $service)
                        <flux:select.option class="w-0.5 h-200 p-4" value="{{ $service->id}}">{{ $service->service_name }}</flux:select.option>
                    @endforeach
                </flux:select>  
                {{--<flux:dropdown>
                    <flux:button icon:trailing="chevron-down">Service</flux:button>

                    <flux:menu>
                        <flux:menu.radio.group wire:model="service_id">
                            <flux:menu.radio checked></flux:menu.radio>
                            @foreach($services as $service)
                            <flux:menu.radio value="{{$service->id}}" >{{$service->service_name}}</flux:menu.radio>
                           @endforeach
                        </flux:menu.radio.group>
                    </flux:menu>
                </flux:dropdown>--}}
                        <flux:input type="text" label="Title" wire:model="title"/>
                <flux:input type="text" icon="star" label="stars" wire:model="stars"/>
                        <flux:textarea label="Review" wire:model="review"/>
                        <flux:input.file type="file" multiple wire:model="" class="p-2" />

                                          <flux:checkbox class="p-10" label="I would like to keep my name out of this review" wire:model="showName"/>
                             <flux:button variant="primary" icon="arrow-uturn-left" class="float-right" wire:click="add()">post review</flux:button>
                            <flux:button variant="outline" icon="minus-circle" class="p-10"  wire:click="{{$this->reset()}}">reset form</flux:button>

            </form>
        </div>
        <flux:callout icon="megaphone" color="yellow" class="mt-4 p-6">Thank you for your review! Your feedback is valuable to us.</flux:callout>
        <flux:callout icon="megaphone" color="yellow" class="mt-4 p-6">
            {{--<livewire:reviews.review-list/>--}}
        </flux:callout>
    </div>
</div>
