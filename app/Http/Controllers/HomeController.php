<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // // Update last login time
        // $user->last_login_at = now();
        // $user->save();

        $users = User::all();

        return view('home', compact('users'));
    }
}
