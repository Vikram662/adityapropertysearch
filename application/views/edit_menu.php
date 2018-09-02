<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Menu</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body my-form-body">
          <?php if(isset($msg) || validation_errors() !== ''): ?>
              <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                  <?= validation_errors();?>
                  <?= isset($msg)? $msg: ''; ?>
              </div>
            <?php endif; ?>
           
            <?php echo form_open_multipart(base_url('shop_admin/menu/edit/'.$menu->mid), 'class="form-horizontal"');  ?> 
              <div class="form-group">
                <label for="fname" class="col-sm-2 control-label">Menu Name</label>

                <div class="col-sm-9">
                  <input type="text" name="menu_name" class="form-control" value="<?=$menu->menu_name?>" id="menu_name" placeholder="">
                </div>
              </div>
              <input type=hidden name="shop_id" value="<?=$this->session->userdata("shop_id")?>" id="">
               <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Menu Image</label>
                <div class="col-sm-9">
                 <input type="file" name="userfile" size="200" />
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-11">
                  <input type="submit" name="submit" value="Edit Menu" class="btn btn-info pull-right">
                </div>
              </div>
            <?php echo form_close(); ?>
          </div>
          <!-- /.box-body -->
      </div>
    </div>
  </div>  
</section> 
<script>
$("#add_user").addClass('active');
</script>    