<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function allUser()
    {
        $Users = User::latest()->get();
        return view('dashboard.allUser', compact('Users'));
    }
}
