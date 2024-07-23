<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class loginUserController
{
    public function userPage()
    {
        return view('User.loginUser');
    }
}
