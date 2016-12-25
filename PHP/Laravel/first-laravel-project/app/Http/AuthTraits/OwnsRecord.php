<?php

namespace App\Http\AuthTraits;
use App\User;
use Illuminate\Support\Facades\Auth;

trait OwnsRecord
{
    public function userNotOwnerOf($modelRecord)
    {
        // returns the id of the currently logged in user
        return $modelRecord->user_id != Auth::id(); //
    }
    public function currentUserOwns($modelRecord)
    {
        return $modelRecord->user_id === Auth::id();
    }
    //checks to see if the user is either the owner of the record or admin
    public function adminOrCurrentUserOwns($modelRecord)
    {
        if (Auth::user()->is_admin == 1) {
            return true;
        }

        return $modelRecord->user_id === Auth::id();
    }

    public function allowUserUpdate($user)
    {
        if (Auth::user()->isAdmin()) {
            return true;
        }

        return $user->id === Auth::id();
    }
}
