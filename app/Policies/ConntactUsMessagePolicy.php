<?php

namespace App\Policies;

use App\Models\ContactUsMessage;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConntactUsMessagePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, ContactUsMessage $conntactUsMessage): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, ContactUsMessage $conntactUsMessage): bool
    {
    }

    public function delete(User $user, ContactUsMessage $conntactUsMessage): bool
    {
    }

    public function restore(User $user, ContactUsMessage $conntactUsMessage): bool
    {
    }

    public function forceDelete(User $user, ContactUsMessage $conntactUsMessage): bool
    {
    }
}
