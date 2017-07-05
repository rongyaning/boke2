<?php

namespace App\Http\Controllers\Home;
use App\Model\Article;
use App\Model\contents;
use App\Model\discusstab;
use App\Model\log;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiscusstabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$art = Article::get();	
		
		$ar = contents::get();
		
		$list = discusstab::where('status', 2)->get();
		
		
		$js = \DB::table("log")->get()->first();
		
		//print_r($list);die();
		return view("home.discusstab.index",['art'=>$art,'ar'=>$ar,'list'=>$list,"js"=>$js]);
		
		 
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		 //return view("admin.stu.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $db = new Discusstab;
       //获取要添加的数据
        $data = $request->only("content","articleid","disTime");
        $data["status"]=1;
		//$date["disTime"]= 'Y-m-d H:i:s';
		 //$data('Y-m-d H:i:s',["disTime"]=time);  
		//print_r(data);
        //print_r($date);die;
        //执行添加
        $id = $db->insertGetId($data);
        //判断
        if($id>0){
         echo  $info = "类别信息添加成功！";
        }else{
         echo  $info = "类别信息添加失败！";
        }
        return redirect('/home/discusstab'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		//$js = \DB::table("userinfo")->get('id',$id)->first();
        //$list =  discusstab::get();
		//return view("home.discusstab.index",["js"=>$js]);
		
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
			//$list = discusstab::where('id',$id)->first(); //获取信息
			
			//return view("admin.discusstab.edit",["list"=>$list]);
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
