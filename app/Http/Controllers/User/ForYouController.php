<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class ForYouController
{
    public function index () {
        return view ('User.foryou');
    }
}
