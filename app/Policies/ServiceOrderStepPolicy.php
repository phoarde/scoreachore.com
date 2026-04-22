<?php

namespace App\Policies;

use App\Models\ServiceOrderStep;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServiceOrderStepPolicy{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, ServiceOrderStep $serviceOrderStep): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, ServiceOrderStep $serviceOrderStep): bool
    {
    }

    public function delete(User $user, ServiceOrderStep $serviceOrderStep): bool
    {
    }

    public function restore(User $user, ServiceOrderStep $serviceOrderStep): bool
    {
    }

    public function forceDelete(User $user, ServiceOrderStep $serviceOrderStep): bool
    {
    }
}
