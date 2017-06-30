<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailController extends Controller
{
    //
    public function detail()
    {
        return view("home.detail.detail");
    }
}
