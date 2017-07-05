<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Contents;
use App\Model\Article;


class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$list = Article::get();
        return view("home.detail.index",['list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("home.detail.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取传过来的字段信息
        $info = $request->only('title','author','content');
        //将内容插入contents表并获取自增id号 
        $id = \DB::table("contents")->insertGetId($info);
        //var_dump($list);die();
        //print_r($id);die;
        // 实例化表并将字段信息插入$info2;
        $data = new Article;
        $info2 = $request->only('title','author');
        $info2['cid'] = $id;
        //print_r($info2);die;
        //$info4 = $request->only('author');
        //\DB::table("article")->insertGetId($info2);
        //添加到Article中
         $data->insert($info2);
        
        return view("home.detail.store");
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

        //return $id;
        //获取要修改的单条信息
        $list = Contents::where('id',$id)->find($id); //获取信息
        //print_r($list);die();
        //return $id;
        //var_dump($list);
      
        return view("home.detail.edit",["list"=>$list]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //dump( $id) ;die; 
        //获取修改的信息
        $input = $request->only('title','author','content');
        //$data =new Contents;
        $data =Contents::where('id',$id)->update($input);

        $info = $request->only('title','author');
        $content = Article::where('cid',$id)->update($info);


       // echo "<pre>";
       // var_dump($input);die();
       // if($idd){
        //    return 1;
        //}else{
          //  return 2;
        //}
        return redirect('home/detail');
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
        $del = Article::find($id);
        $del->delete($id); 
        return redirect('home/detail');
    }
}
