<?php

use Livewire\Component;
use App\Models\Review;

new class extends Component {
public $reviews;
public $nmae;

public function mount(){
    $this->reviews=Review::take(1)->latest();
    $name=$this->getName($this->reviews);

}
public getName($rev)
    {
        if($rev->showName)
            return App\Models\User::take(1)->where(id===$rev->user_id)
}
};
?>

<div>
    <h1>Reviews</h1>
     <table>
        <th>name</th>
        <th>rating</th>
        <th>review</th>
        <th>created_at</th>
    @foreach ($reviews as $review)
        <tr>{{$this->name}}</tr>
         <tr>{{$review->rating}}</tr>
            <tr>{{$review->review}}</tr>
            <tr>{{$review->created_at}}</tr>
        @endforeach
        </table>
</div>
