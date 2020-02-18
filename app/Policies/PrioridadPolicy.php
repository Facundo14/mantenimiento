<?php

namespace App\Policies;

use App\User;
use App\Prioridad;
use Illuminate\Auth\Access\HandlesAuthorization;

class PrioridadPolicy
{
    use HandlesAuthorization;

    public function before($user)
    {
        if ($user->hasRole('Admin')) {

            return true;
        }
    }

    /**
     * Determine whether the user can view the prioridad.
     *
     * @param  \App\User  $user
     * @param  \App\Prioridad  $prioridad
     * @return mixed
     */
    public function view(User $user, Prioridad $prioridad)
    {
        return $user->hasRole('Admin') || $user->hasPermissionTo('view_prioridads');
    }

    /**
     * Determine whether the user can create prioridads.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasRole('Admin') || $user->hasPermissionTo('create_prioridads');
    }

    /**
     * Determine whether the user can update the prioridad.
     *
     * @param  \App\User  $user
     * @param  \App\Prioridad  $prioridad
     * @return mixed
     */
    public function update(User $user, Prioridad $prioridad)
    {
        return $user->hasRole('Admin') || $user->hasPermissionTo('edit_prioridads');
    }

    /**
     * Determine whether the user can delete the prioridad.
     *
     * @param  \App\User  $user
     * @param  \App\Prioridad  $prioridad
     * @return mixed
     */
    public function delete(User $user, Prioridad $prioridad)
    {
        return $user->hasRole('Admin') || $user->hasPermissionTo('delete_prioridads');
    }

    /**
     * Determine whether the user can restore the prioridad.
     *
     * @param  \App\User  $user
     * @param  \App\Prioridad  $prioridad
     * @return mixed
     */
    public function restore(User $user, Prioridad $prioridad)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the prioridad.
     *
     * @param  \App\User  $user
     * @param  \App\Prioridad  $prioridad
     * @return mixed
     */
    public function forceDelete(User $user, Prioridad $prioridad)
    {
        //
    }
}
