    <?php $__env->startSection('content'); ?>
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
                    <form action="<?php echo e(url('admin/edit')); ?>" method="get">
          
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
                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($v->id); ?></td>
                      <td><?php echo e($v->title); ?></td>
                      <td><?php echo e($v->cid); ?></td>
                      <td><?php echo e($v->author); ?></td>
                      <td><textarea cols="120" rows="20" contenteditable="true"><?php echo e($v->content); ?></textarea></td>
                     
                    
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </table><br/><br/><br/>
                <!--<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">当前状态</label>
                      <div class="col-sm-4">
                        <label class="radio-inline">
                          <input type="radio" name="status" id="inlineRadio1" <?php echo e(($list->status == 1)?"checked":""); ?> value="0"> 通过
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="status" id="inlineRadio2" <?php echo e(($list->status == 2)?"checked":""); ?> value="1"> 未通过
                        </label>
                          <label class="radio-inline">
                          <input type="radio" name="status" id="inlineRadio2" <?php echo e(($list->status == 3)?"checked":""); ?> value="1"> 
                          带审核
                        </label>
                      </div>
                    </div>-->
      <!-- /.box-body -->
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
    <?php $__env->stopSection(); ?>
    
<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>