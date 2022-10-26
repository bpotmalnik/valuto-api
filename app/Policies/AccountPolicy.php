<?php

namespace App\Policies;

use App\Models\Account;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AccountPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): void
    {
        //
    }

    public function view(User $user, Account $account): void
    {
        //
    }

    public function create(User $user): void
    {
        //
    }

    public function update(User $user, Account $account): void
    {
        //
    }

    public function delete(User $user, Account $account): void
    {
        //
    }

    public function restore(User $user, Account $account): void
    {
        //
    }

    public function forceDelete(User $user, Account $account): void
    {
        //
    }
}
