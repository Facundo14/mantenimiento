<?php

namespace App\Policies;

use App\User;
use App\Estado;
use Illuminate\Auth\Access\HandlesAuthorization;

class EstadoPolicy
{
    use HandlesAuthorization;

    public function before($user)
    {
        if ($user->hasRole('Admin')) {

            return true;
        }
    }

    /**
     * Determine whether the user can view the estado.
     *
     * @param  \App\User  $user
     * @param  \App\Estado  $estado
     * @return mixed
     */
    public function view(User $user, Estado $estado)
    {
        return $user->hasRole('Admin') || $user->hasPermissionTo('view_estados');
    }

    /**
     * Determine whether the user can create estados.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasRole('Admin') || $user->hasPermissionTo('create_estados');
    }

    /**
     * Determine whether the user can update the estado.
     *
     * @param  \App\User  $user
     * @param  \App\Estado  $estado
     * @return mixed
     */
    public function update(User $user, Estado $estado)
    {
        return $user->hasRole('Admin') || $user->hasPermissionTo('edit_estados');
    }

    /**
     * Determine whether the user can delete the estado.
     *
     * @param  \App\User  $user
     * @param  \App\Estado  $estado
     * @return mixed
     */
    public function delete(User $user, Estado $estado)
    {
        return $user->hasRole('Admin') || $user->hasPermissionTo('delete_estados');
    }

    /**
     * Determine whether the user can restore the estado.
     *
     * @param  \App\User  $user
     * @param  \App\Estado  $estado
     * @return mixed
     */
    public function restore(User $user, Estado $estado)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the estado.
     *
     * @param  \App\User  $user
     * @param  \App\Estado  $estado
     * @return mixed
     */
    public function forceDelete(User $user, Estado $estado)
    {
        //
    }
}
