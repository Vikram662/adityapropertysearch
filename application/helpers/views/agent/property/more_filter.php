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
                    <form class="form-horizontal form-label-left" action="<?=base_url('agent/property/update_filter/'.@$this->uri->segment(4))?>" method="post" enctype="multipart/form-data">

                       <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Construction Status
                        </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                       
                          <div class="radio col-sm-3">
                            <label>
                              <input type="radio" value="Ready To Move" <?=$property->counstruction_status=='Ready To Move'?'checked':''?> class="flat"  name="counstruction_status"> Ready To Move
                            </label>
                          </div>
                          <div class="radio col-sm-3">
                            <label>
                              <input type="radio" value="Under Construction" <?=$property->counstruction_status=='Under Construction'?'checked':''?> class="flat" name="counstruction_status"> Under Construction
                            </label>
                          </div>
                          
                        
                        </div>
                      </div>
                     <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Property Condition
                        </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                       
                          <div class="radio col-sm-3">
                            <label>
                              <input type="radio" value="New" <?=$property->property_condtion=='New'?'checked':''?> class="flat"  name="property_condtion"> New
                            </label>
                          </div>
                          <div class="radio col-sm-3 ">
                            <label>
                              <input type="radio" value="Resale" <?=$property->property_condtion=='Resale'?'checked':''?> class="flat" name="property_condtion"> Resale
                            </label>
                          </div>
                          
                        
                        </div>
                      </div>


                        <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Furnish
                        </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                       
                          <div class="radio col-sm-3">
                            <label>
                              <input type="radio" value="New" <?=$property->furnish=='Furnished'?'checked':''?> class="flat"  name="furnish"> Furnished
                            </label>
                          </div>
                          <div class="radio col-sm-3 ">
                            <label>
                              <input type="radio" value="Semi-Furnished" <?=$property->furnish=='Semi-Furnished'?'checked':''?> class="flat" name="furnish"> Semi-Furnished
                            </label>
                          </div>
                           <div class="radio col-sm-3 ">
                            <label>
                              <input type="radio" value="Unfurnished" <?=$property->furnish=='Unfurnished'?'checked':''?> class="flat" name="furnish"> Unfurnished
                            </label>
                          </div>
                        
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Floor</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" name="floor" id="listBox1">
                               <option  value="">Select Option</option>
                               <option <?=@$property->floor=='Basement'?'selected':'' ?> value="Basement">Basement </option>
                               <option <?=@$property->floor=='Ground'?'selected':'' ?> value="Ground">Ground </option>
                               <?php 
                               $i=1;
                               while ($i <= 20) {
                                ?>
                                   <option <?=@$property->floor==$i?'selected':'' ?> value="<?=$i?>"><?=$i?> Floor</option>
                                <?php
                                $i++;
                               } ?>
                              
                            
                           </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Amenities
                        </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <?php $Amenities= $this->db->get('amenities')->result_array(); 
                            $amet = explode(',', $property->Amenities);
                           
                        
                                echo $div = '<div class="form-check" >';
                                foreach ($Amenities as $am) {?>

                                 
                                    <div class="checkbox col-sm-3">
                                      <label>
                                        <input type="checkbox" <?php
                                 if (in_array($am['name'], $amet))
                                      {
                                      echo "checked";
                                      }
                                    
                                   ?>  name="Amenities[]" value="<?=$am['name']?>" class="flat" > <?=$am['name']?>
                                      </label>
                                    </div>
                                <?php 
                              } ?>
                            </div>

                        </div>
                         <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Facing
                        </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                              <div class="checkbox col-sm-3">
                                <label>
                                  <input type="radio"  name="facing" value="East" class="flat" > East
                                </label>
                              </div>

                                <div class="checkbox col-sm-3">
                                <label>
                                  <input type="radio"  name="facing" value="North-East" class="flat" > North-East
                                </label>
                              </div>
                                <div class="checkbox col-sm-3">
                                <label>
                                  <input type="radio"  name="facing" value="North" class="flat" > North
                                </label>
                              </div>
                                <div class="checkbox col-sm-3">
                                <label>
                                  <input type="radio"  name="facing" value="North - West" class="flat" > North - West
                                </label>
                              </div>
                                <div class="checkbox col-sm-3">
                                <label>
                                  <input type="radio"  name="facing" value="South" class="flat" > South
                                </label>
                              </div>
                                <div class="checkbox col-sm-3">
                                <label>
                                  <input type="radio"  name="facing" value="South - East" class="flat" > South - East
                                </label>
                              </div>

                              
                            </div>

                        </div>
                      </div>
                         <!--  <div class="control-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">More Feature  <br><small>(expmple - Wifi, Balcony etc.)</small></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input  id="tags_1" type="text" name="more" value="<?=$property->more ?>" class="tags form-control" value="" />
                          <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                        </div>
                      </div> -->
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