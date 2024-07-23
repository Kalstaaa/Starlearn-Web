<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class CategoryController
{
    public function index () {
        return view ('User.category');
    }
}
