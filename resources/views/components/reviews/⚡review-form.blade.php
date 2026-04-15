<?php

use Illuminate\Support\Collection;
use Livewire\Component;
use App\Models\User;
use App\Models\Service;
use App\Models\Contractors;
use App\Models\Review;
use App\Models\ServiceOrders;

new class extends Component {
    public int $user_id;
    public int $contractors_id;
    public int $service_id;
    public string $title;
    public string $review;
    public date $date;
    public  $user;
    public  $serviceOrder;


    public function mount(): Void
    {
        $this->user_id = auth()->user()->id;
        $this->serviceOrder=ServiceOrders::whereUserId($this->user_id)->latest();
    }
    };
?>

<div>
    <flux:fieldset>
        <form>
            <flux:input type="text" name="title" placeholder="Title" />
            <flux:textarea name="review" placeholder="Review" />
            <flux:input type="date" name="date" />
            <flux:button>Submit</flux:button>
                Please write a review of your experience with scoreachore. you can add photos of of our work too.  *must be logged in  and have a related service order to write a review*q
        </form>
    </flux:fieldset>
</div>


d;
