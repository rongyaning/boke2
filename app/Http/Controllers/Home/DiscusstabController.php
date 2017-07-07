<?php

namespace App\Http\Controllers\Home;
use App\Model\Article;
use App\Model\contents;
use App\Model\discusstab;
use App\Model\log;
use App\Model\Redirect;
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
		//$ss = 
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
    
	
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
	{
		$art = Article::where("userid","=",$id)->get();
		//$eee = 
		/* echo "<pre>";
		print_r($art);die(); */
		
		$ar = contents::where("userid","=",$id)->get();	
		//$ars = discusstab::where("userid","=",$id)->get();	
			
		$list = discusstab::where('status', 2)->get();
		
		
		//$js = \DB::table("user")->where("id")->first();
		
		//print_r($list);die();
		return view("home.discusstab.show",['art'=>$art,'ar'=>$ar,'list'=>$list]);	
    }
	public function store(Request $request)
    {	
        $db = new Discusstab;
        
		//$art = article::find(1);
       //获取要添加的数据
	   
        $data = $request->only("content","articleid","disTime");
        $data["status"]=1;
		$id = $db->insertGetId($data);
        //判断
        if($id>0){
         echo  $info = "类别信息添加成功！";
        }else{
         echo  $info = "类别信息添加失败！";
        }
		return redirect("home"); 	
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
