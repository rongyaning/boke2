@extends('admin.base')
    @section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            文章审核列表
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
                    <form action="{{url('admin/article')}}" method="get">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="author" class="form-control input-sm pull-right" placeholder="作者"/>
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
                      <th>ID</th>
                      <th>用户id</th>
                      <th>文章id</th>
                      <th>标题</th>
                      <th>作者</th>
                      <th>头像</th>
					             <th>文章类型</th>
                      <th>发布时间</th>
                      <th>状态</th>
                      <th>操作</th>
                    </tr>
                    @foreach($list as $v)
                    <tr>
                      <td>{{$v->id}}</td>
                      <td>{{$v->userid}}</td>
                      <td>{{$v->cid}}</td>
                      <td>{{$v->title}}</td>
                      <td>{{$v->author}}</td>
                      <td>{{$v->picname}}</td>
                      <td>{{$v->articleType}}</td>
                      <td>{{$v->addtime}}</td>
                      <td class="btn btn-primary btn-xs">@if ($v->status=='1')已通过 @elseif ($v->status=='2')未通过 @else ($v->status=='3')待审核 @endif</td>
        
                      <td><a href = 'delete/{{ $v->id }}' class="btn btn-xs btn-danger">删除</a> 
                      <button class="btn btn-xs btn-primary" onclick="window.location='{{URL('/admin/contents')}}'">查看内容详情</button> 
                      </td>
                    </tr>
                    @endforeach
                  
                   
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  {!! $list->appends($params)->render() !!}
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
    