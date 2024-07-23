<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class DetailBookController
{
    public function DetailBookPage()
    {
        return view ('User.detailbook');
    }
}
