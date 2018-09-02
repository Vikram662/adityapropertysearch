<script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
<script>        // Replace the <textarea id="editor1"> with a CKEditor
// instance, using default configuration.
CKEDITOR.editorConfig = function (config) {
    config.language = 'en';
    config.uiColor = '#F7B42C';
    config.height = 300;
    config.toolbarCanCollapse = true;

};
CKEDITOR.replace('editor1');
</script>
 <?php 
$property =  $this->admin_model->get_property_by_id($this->uri->segment(4));

$gallery =   $this->admin_model->get_gallery_id($this->uri->segment(4));
   ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Property Detail</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Property <small>Detail</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" action="<?=base_url('agent/property/update/'.@$this->uri->segment(4))?>" method="post" enctype="multipart/form-data">

                    <!--   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Address<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3" placeholder="" name="address"><?=@$property->address ?>  </textarea>
                        </div>
                      </div> -->
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Property Area Size</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control" name='area' value="<?=@$property->area ?>" placeholder="Property Size example: - 1000 Sq.">
                        </div>
                      </div>
                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Property Carpet Area Size</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control" name='c_area' value="<?=@$property->c_area ?>" placeholder="Property Size example: - 1000 Sq.">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Bathroom</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control" name='bathroom' value="<?=@$property->bathroom ?>" placeholder="Bathroom example: - 1 or 2">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Latitude</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control" name='latitude' value="<?=@$property->latitude ?>" placeholder="latitude">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Longitude</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control" name='longitude' value="<?=@$property->longitude ?>" placeholder="longitude">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Short Description<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3" placeholder="" name="short_des"><?=@$property->short_des ?></textarea>
                        </div>
                      </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Long Description<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3" id="editor1" placeholder="" name="long_desc"> <?=@$property->long_desc ?> </textarea>
                        </div>
                      </div>
                       
                      <?php echo $property->property_type; 
                      echo $property->sale_type;?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Porperty Type</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" name="property_type" required="" id="listBox1">
                             <option   value="">Select Property Type</option>
                            
                           
                           <?php if($property->sale_type=='Commercial'){
                            ?>  <optgroup label="ALL COMMERCIAL">
                               <?php $RESIDENTIAL= $this->db->get_where('category',['catetory'=>'ALL COMMERCIAL'])->result_array(); 
                                    foreach($RESIDENTIAL as $res){
                                    ?>
                                    <option <?=@$property->property_type==$res['sub_cat']?'selected':'' ?> value="<?=$res['sub_cat']?>"><?=$res['sub_cat']?></option>
                                   
                                    <?php } 
                                  }else{
                                    ?>
                                     <optgroup label="ALL RESIDENTIAL">
                               <?php $RESIDENTIAL= $this->db->get_where('category',['catetory'=>'RESIDENTIAL'])->result_array(); 
                                    foreach($RESIDENTIAL as $res){
                                    ?>
                                    <option <?=@$property->property_type==$res['sub_cat']?'selected':'' ?> value="<?=$res['sub_cat']?>"><?=$res['sub_cat']?></option>
                                   
                                    <?php } 
                                      ?>
                                        <optgroup label="ALL AGRICULTURAL">
                                      <?php
                                   $RESIDENTIAL= $this->db->get_where('category',['catetory'=>'ALL AGRICULTURAL'])->result_array(); 
                                    foreach($RESIDENTIAL as $res){
                                    ?>
                                    <option <?=@$property->property_type==$res['sub_cat']?'selected':'' ?> value="<?=$res['sub_cat']?>"><?=$res['sub_cat']?></option>
                                   
                                    <?php }


                                  }?>
                           
                          
                            

                          </select>
                        </div>
                      </div>
                       <?php if($property->sale_type!='Commercial'){ ?>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">BHK</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" name="bhk" id="listBox1">
                               <option  value="">Select Option</option>
                               <option <?=@$property->bhk=='1 BHK'?'selected':'' ?> value="1 BHK">1 BHK </option>
                               <option <?=@$property->bhk=='2 BHK'?'selected':'' ?> value="2 BHK">2 BHK </option>
                               <option <?=@$property->bhk=='3 BHK'?'selected':'' ?> value="3 BHK">3 BHK </option>
                               <option <?=@$property->bhk=='4 BHK'?'selected':'' ?> value="4 BHK">4 BHK </option>
                               <option <?=@$property->bhk=='5 BHK'?'selected':'' ?> value="5 BHK">5 BHK </option>
                          </select>
                        </div>
                      </div>
                    <?php } ?>
               
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image <br><small>(You Can Select Multiple Image)</small></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="file" class="form-control" name="img[]" multiple=""  >
                        </div>
                      </div>
                       
                   
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <script type="text/javascript">
 
        $('select[name=state]').change(function(event) {
          /* Act on the event */
          var val = $(this).val();
          $.ajax({
            url: '<?=@base_url('admincp/ajax/city')?>',
            type: 'POST',
            data: {val:val},
          })
          .done(function(data) {
            console.log(data);
            $('#city').html(data);
          })
          .fail(function(err) {
            console.log(err);
          })
          .always(function() {
            console.log("complete");
          });
          
        });

        $('select[name=city]').change(function(event) {
          /* Act on the event */
          var val = $(this).val();
          
          $.ajax({
            url: '<?=base_url('admincp/ajax/loc')?>',
            type: 'POST',
            data: {val:val},
          })
          .done(function(data) {
            console.log(data);
            $('#loc').html(data);
          })
          .fail(function(err) {
            console.log(err);
          })
          .always(function() {
            console.log("complete");
          });
          
        });
        // Replace the <textarea id="editor1"> with a CKEditor
// instance, using default configuration.
CKEDITOR.editorConfig = function (config) {
    config.language = 'en';
    config.uiColor = '#F7B42C';
    config.height = 300;
    config.toolbarCanCollapse = true;

};
CKEDITOR.replace('editor1');
        </script>