<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Userinfo;
use App\Http\Requests;


class PersonalController extends Controller
{
    
    public function index()
	{
		$list = Userinfo::all(); 
		return view("home.personal.index",['list'=>$list]);
	
	}


	 public function create()
    {
        //加载添加页面
        $list = Userinfo::where('id','=',$id)->first();
        //$list = Userinfo::all(); 
        return view("home.personal.create",['list'=>$list]);
    }

    
    public function store(Request $request)
    {
        //获取要添加的数据
        
        $data = $request->only("uname",'email','age','sex');
        //执行添加
        $id = \DB::table("userinfo")->insertGetId($data);
        //判断
        if($id>0){
            $info = "个人信息添加成功！";
        }else{
            $info = "个人信息添加失败！";
        }
        return redirect("home/personal");
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //加载修改页面
        //
        $list = Userinfo::where('id','=',$id)->first();
        
        return view("home.personal.edit",['list'=>$list]);
    }

   
    public function update(Request $request, $id)
    {
        //执行修改，
        $data = $request->only("pic","uname","email","age","sex");
        $id = \DB::table("userinfo")->where("id",$id)->update($data);
        if($id>0){
            return redirect('admin/personal');
        }else{
            return back()->with("err","修改失败!");
        }
    }

    
    public function destroy($id)
    {
        //
    }


	
}
