<?php

namespace App\Policies;

use App\Models\ReviewImage;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReviewImagePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, ReviewImage $reviewImage): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, ReviewImage $reviewImage): bool
    {
    }

    public function delete(User $user, ReviewImage $reviewImage): bool
    {
    }

    public function restore(User $user, ReviewImage $reviewImage): bool
    {
    }

    public function forceDelete(User $user, ReviewImage $reviewImage): bool
    {
    }
}
