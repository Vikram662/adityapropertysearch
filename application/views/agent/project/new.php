
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>New Project</h3>
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
                    <h2>New Project <small>sub title</small></h2>
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
                    <form class="form-horizontal form-label-left" action="<?=base_url('agent/project/add/'.@$property['id'])?>" method="post" enctype="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" name="project_name" maxlength="30" required="" placeholder="Project Name">
                        </div>
                      </div>
                       
                      <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Project Type
                        </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                       
                          <div class="radio col-sm-4">
                            <label>
                              <input type="checkbox" value="RESIDENTIAL" id="ch" class="flat project_type" checked name="project_type"> RESIDENTIAL
                            </label>
                          </div>
                          <div class="radio col-sm-4">
                            <label>
                              <input type="checkbox" value="COMMERCIAL" class="flat project_type" name="project_type"> COMMERCIAL
                            </label>
                          </div>
                          <div class="radio col-sm-4">
                            <label>
                              <input type="checkbox" value="PLOT PLANNING" class="flat project_type" name="project_type"> PLOT PLANNING
                            </label>
                          </div>
                        
                        
                        </div>
                      </div>
                    <!--   <div class="form-group" id="flat_type" >
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Type Of Flats
                        </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                          
                          <div class="radio col-sm-2">
                            <label>
                              <input type="checkbox" value="1 BHK" class="flat" checked name="flat_type"> 1 BHK
                            </label>
                          </div>
                          <div class="radio col-sm-2">
                            <label>
                              <input type="checkbox" value="2 BHK" class="flat" name="flat_type"> 2 BHK
                            </label>
                          </div>
                         <div class="radio col-sm-2">
                            <label>
                              <input type="checkbox" value="3 BHK" class="flat" name="flat_type"> 3 BHK
                            </label>
                          </div>
                           <div class="radio col-sm-2">
                            <label>
                              <input type="checkbox" value="4 BHK" class="flat" name="flat_type"> 4 BHK
                            </label>
                          </div>
                           <div class="radio col-sm-2">
                            <label>
                              <input type="checkbox" value="5 BHK" class="flat" name="flat_type"> 5 BHK
                            </label>
                          </div>
                           <div class="radio col-sm-2">
                            <label>
                              <input type="checkbox" value="6 BHK" class="flat" name="flat_type"> 6 BHK
                            </label>
                          </div>
                        </div>
                      </div> -->
                 <!--      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">State</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" name="state" required="" id="listBox1">
                            <option value="">Choose option</option>
                            <?php 
                                $states = $this->admin_model->get_state();
                                foreach ($states as $state) {
                                  ?>
                                      <option value="<?=$state['state_id']?>"><?=$state['state_name']?></option>
                                  <?php
                                }
                            ?>
                          </select>
                        </div>
                      </div> -->
                      <div class="form-group" >
                         <label class="control-label col-md-3 col-sm-3 col-xs-12">City</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" name="city" required="" id="city" >
                            <option value="">Choose option</option>
                             <?php 
                                $states = $this->db->get_where('city',['status'=>1])->result_array();
                                foreach ($states as $state) {
                                  ?>
                                      <option value="<?=$state['city_id']?>"><?=$state['city_name']?></option>
                                  <?php
                                }
                            ?>
                           </select>
                        </div>
                       
                      </div>
                      <div class="form-group"> 
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Locality</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" name="locality" required=""  id="loc" >
                            <option value="">Choose option</option>
                               </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Price <br><small>Onwards</small> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control" name='price' value="<?=@$property->price ?>" placeholder="Price Onwards">
                        </div>
                      </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">About Porject
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3" placeholder="" name="long_description"><?=@$property->long_description ?></textarea>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Featured Image <br><small>Image Size 350px*255px</small></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="file" class="form-control" name="fet" required="" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Banner Image<br><small>Image Size 1920px*800px</small></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="file" class="form-control" name="banner" required="" >
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
            url: '<?=base_url('admincp/ajax/city')?>',
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
        if ($('#isAgeSelected').attr('checked'))
          {
              $("#flat_type").show();
          }
          else
          {
              $("#flat_type").hide();
          }
         
        </script>