<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
//use App\Http\Controllers\Home\user;
use App\Model\user;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		return view("home.register");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		$db = new user;
       //获取要添加的数据
        $data = $request->only("phone","password","account");
		$data['password'] = md5($data['password']);
		//$data['addtime']=date("Y-m-d H:i:s",time());
        //执行添加
        $id = $db->insertGetId($data);
		/* 	$uid = new userinfo;
		$info = userinfo::where('userid');
		$info("userid") = $id;
		$i = $uid->insertGetId($info); */
        //判断
        if($id>0){
         echo  $info = "类别信息添加成功！";
        }else{
         echo  $info = "类别信息添加失败！";
        }
        return redirect('/home/login'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
