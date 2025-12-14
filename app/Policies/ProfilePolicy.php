<?php

namespace App\Policies;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProfilePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    // public function viewAny(Profile $profile): bool
    // {
    //     //
    // }

    /**
     * Determine whether the user can view the model.
     */
    // public function view(Profile $profile, Profile $profile): bool
    // {
    //     //
    // }

    /**
     * Determine whether the user can create models.
     */
    // public function create(Profile $profile): bool
    // {
    //     //
    // }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Profile $user, Profile $profile)
    {
        return $user->id === $profile->id ; 
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Profile $user, Profile $profile)
    {
        return $user->id === $profile->id; 
    }

    /**
     * Determine whether the user can restore the model.
     */
    // public function restore(Profile $profile, Profile $profile): bool
    // {
    //     //
    // }

    // /**
    //  * Determine whether the user can permanently delete the model.
    //  */
    // public function forceDelete(Profile $profile, Profile $profile): bool
    // {
    //     //
    // }
}
