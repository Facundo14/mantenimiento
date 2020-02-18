<?php

namespace App\Policies;

use App\User;
use App\Sector;
use Illuminate\Auth\Access\HandlesAuthorization;

class SectorPolicy
{
    use HandlesAuthorization;

    public function before($user)
    {
        if ($user->hasRole('Admin')) {

            return true;
        }
    }

    /**
     * Determine whether the user can view the sector.
     *
     * @param  \App\User  $user
     * @param  \App\Sector  $sector
     * @return mixed
     */
    public function view(User $user, Sector $sector)
    {
        return $user->hasRole('Admin') || $user->hasPermissionTo('view_sectors');
    }

    /**
     * Determine whether the user can create sectors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasRole('Admin') || $user->hasPermissionTo('create_sectors');
    }

    /**
     * Determine whether the user can update the sector.
     *
     * @param  \App\User  $user
     * @param  \App\Sector  $sector
     * @return mixed
     */
    public function update(User $user, Sector $sector)
    {
       return $user->hasRole('Admin') || $user->hasPermissionTo('edit_sectors');
    }

    /**
     * Determine whether the user can delete the sector.
     *
     * @param  \App\User  $user
     * @param  \App\Sector  $sector
     * @return mixed
     */
    public function delete(User $user, Sector $sector)
    {
        return $user->hasRole('Admin') || $user->hasPermissionTo('delete_sectors');
    }

    /**
     * Determine whether the user can restore the sector.
     *
     * @param  \App\User  $user
     * @param  \App\Sector  $sector
     * @return mixed
     */
    public function restore(User $user, Sector $sector)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the sector.
     *
     * @param  \App\User  $user
     * @param  \App\Sector  $sector
     * @return mixed
     */
    public function forceDelete(User $user, Sector $sector)
    {
        //
    }
}
