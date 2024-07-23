<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class DashboardUser
{
    public function DashboardPage()
    {
        return view('User.dashboard');
    }
}
