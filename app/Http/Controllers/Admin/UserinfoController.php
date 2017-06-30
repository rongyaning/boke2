<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Userinfo;

class UserinfoController extends Controller
{
    //后台userinfo首页 
    public function index()
    {
       
       $list = Userinfo::all();
       return view("admin.userinfo.index",['list'=>$list]);
    }
}
