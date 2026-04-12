<?php
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\User;
new class extends component
{

public function mount()
    {
    $user=auth()->user();
        if ($user->hasRole('admin')) return redirect()->to('admin-home');
        elseif($user->hasRole('Contractor')) return redirect()->to('contractor-home ');
        elseif ($user->hasRole('User')) return redirect()->to('user-home');
        else
        {
            if(auth()->user()->assignRole('user'))  return redirect()->to('user-home'   );
            else abort(403, 'This action is unauthorized.');
        };

        }
}
?>


<div class="relative aspect-video overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm">
</div>
