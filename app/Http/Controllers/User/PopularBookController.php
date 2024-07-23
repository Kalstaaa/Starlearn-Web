<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class PopularBookController
{
    public function index () {
        return view ('User.popular-book');
    }
}
