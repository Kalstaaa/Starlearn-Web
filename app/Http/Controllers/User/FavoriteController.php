<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class FavoriteController
{
    public function index () {
        return view('User.favorite');
    }
}
