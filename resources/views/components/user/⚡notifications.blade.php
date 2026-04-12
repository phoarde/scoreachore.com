<?php

use Livewire\Component;

new class extends Component {

};
?>

<div>
your score a chore messages and unread notifications:
    <ul>
        @foreach ($notifications as $notification)
            <li>{{ $notification->message }}</li>
        @endforeach
    </ul>
</div>

@if ($unreadCount > 0)
    <p>You have {{ $unreadCount }} unread notifications.</p>
@endif
<flux:notifications />

