<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'user')->get(); // tampilkan hanya user biasa
        return view('admin.dashboard', compact('users'));
    }
}
