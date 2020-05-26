<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(\App\User $user)
    {
        if(auth()->user()->id != $user->id)
            return auth()->user()->following()->toggle($user->profile);
    }
}
