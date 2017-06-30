@extends('admin.base')
    @section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            文章内容显示
            <small>Review list</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">文章列表信息</a></li>
            <li class="active">列表</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 文章信息</h3>
                  <div class="box-tools">
                    <form action="{{url('admin/stu')}}" method="get">
          
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="name" class="form-control input-sm pull-right" placeholder="文章id"/>
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                    </form>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th width="100">ID</th>
                      <th width="1000">标题</th>
                      <th width="500">头像</th>
                      <th width="500">作者</th>
                      <th>内容</th>
                    </tr>
                    @foreach($list as $v)
                    <tr>
                      <td>{{$v->id}}</td>
                      <td>{{$v->title}}</td>
                      <td>{{$v->cid}}</td>
                      <td>{{$v->author}}</td>
                      <td><textarea cols="120" rows="20" contenteditable="true">{{ $v->content }}</textarea></td>
                     
                    
                    </tr>
                    @endforeach
                  </table><br/><br/><br/>
                <div class="btn-group" id="color" data-toggle="buttons">
                  <label class="btn btn-default">
                      <input type="radio" class="toggle" value="1">通过
                  </label>
                   <label class="btn btn-default">
                      <input type="radio" class="toggle" value="2">未通过
                  </label>
                </div>

                <div>
                  <button type="button" class="btn btn-success">通过发布</button><br/><br/>
                  <button type="button" class="btn btn-danger">未通过驳回</button>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                 
                </div>
              </div><!-- /.box -->

              
              
            </div><!-- /.col -->
            
          </div><!-- /.row -->
         
        </section><!-- /.content -->
        <form action="" style="display:none;" id="mydeleteform" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="hidden" name="_method" value="DELETE">
        </form>
    @endsection
    
    
    @section("myscript")
      <script type="text/javascript">
            function doDel(id){
                if(confirm('确定要删除吗？')){
                    $("#mydeleteform").attr("action","{{url('admin/goods')}}/"+id).submit(); 
                }
            }
      </script>
    @endsection