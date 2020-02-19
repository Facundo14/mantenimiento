<?php

namespace App\Policies;

use App\User;
use App\Piso;
use Illuminate\Auth\Access\HandlesAuthorization;

class PisoPolicy
{
    use HandlesAuthorization;

    public function before($user)
    {
        if ($user->hasRole('Admin')) {

            return true;
        }
    }

    /**
     * Determine whether the user can view the piso.
     *
     * @param  \App\User  $user
     * @param  \App\Piso  $piso
     * @return mixed
     */
    public function view(User $user, Piso $piso)
    {
        return $user->hasRole('Admin') || $user->hasPermissionTo('view_pisos');
    }

    /**
     * Determine whether the user can create pisos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
       return $user->hasRole('Admin') || $user->hasPermissionTo('create_pisos');
    }

    /**
     * Determine whether the user can update the piso.
     *
     * @param  \App\User  $user
     * @param  \App\Piso  $piso
     * @return mixed
     */
    public function update(User $user, Piso $piso)
    {
        return $user->hasRole('Admin') || $user->hasPermissionTo('edit_pisos');
    }

    /**
     * Determine whether the user can delete the piso.
     *
     * @param  \App\User  $user
     * @param  \App\Piso  $piso
     * @return mixed
     */
    public function delete(User $user, Piso $piso)
    {
        return $user->hasRole('Admin') || $user->hasPermissionTo('delete_pisos');
    }

    /**
     * Determine whether the user can restore the piso.
     *
     * @param  \App\User  $user
     * @param  \App\Piso  $piso
     * @return mixed
     */
    public function restore(User $user, Piso $piso)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the piso.
     *
     * @param  \App\User  $user
     * @param  \App\Piso  $piso
     * @return mixed
     */
    public function forceDelete(User $user, Piso $piso)
    {
        //
    }
}
