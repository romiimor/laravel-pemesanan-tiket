<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();

        if ($user->hasRole('admin')) {
            // Ambil semua user untuk ditampilkan ke admin
            $users = User::all(); 
            return view('admin.dashboard', compact('users'));
        }

        return view('user.dashboard');
    }
}
