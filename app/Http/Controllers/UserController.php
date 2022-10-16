<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function Profile(User $user)
    {


        return view('user.profile')->with('user', $user);
    }
}