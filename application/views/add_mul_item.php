<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Add More Item</h3>
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
           
         <?php $id=$this->uri->segment(4,0);?>
            <?php echo form_open_multipart(base_url('shop_admin/item/add_mul/'.$id), 'class="form-horizontal"');  ?>
               <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Item Name</label>
                <div class="col-sm-9">
                  <input type="text" name="item_name" class="form-control" value="<?=set_value('item_name')?>" id="menu_name" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-9">
                  <textarea name="description" class="form-control" cols="30" rows="10"><?=set_value('description')?></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Price</label>
                <div class="col-sm-9">
                  <input type="text" name="price" class="form-control" value="<?=set_value('price')?>" id="menu_name" placeholder="">
                </div>
              </div>
              <input type=hidden name="shop_id" value="<?=$this->session->userdata("shop_id")?>" id="">
              <input type=hidden name="status" value="active" id="">
              <input type=hidden name="stock" value="in" id="">
              <div class="form-group">
                <div class="col-md-11">
                  <input type="submit" name="submit" value="Add Item" class="btn btn-info pull-right">
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