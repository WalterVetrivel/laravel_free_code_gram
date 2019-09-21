<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function show($user)
    {
        $foundUser = User::findOrFail($user);

        return view('profiles.show', ['user' => $foundUser]);
    }
}
