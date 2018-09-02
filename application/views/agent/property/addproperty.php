
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>New Property</h3>
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
                    <h2>New Property <small>sub title</small></h2>
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
                    <form class="form-horizontal form-label-left" action="<?=base_url('agent/property/add/'.@$property['id'])?>" method="post" enctype="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Property Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" name="name" maxlength="30" required="" placeholder="Property Name">
                        </div>
                      </div>
                       
                      <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">I Am
                        </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                       
                          <div class="radio col-sm-2">
                            <label>
                              <input type="radio" value="Owner" class="flat" checked name="posted_by"> OWNER
                            </label>
                          </div>
                          <div class="radio col-sm-2">
                            <label>
                              <input type="radio" value="Agent" class="flat" name="posted_by"> AGENT
                            </label>
                          </div>
                           <div class="radio col-sm-2">
                            <label>
                              <input type="radio" value="Builder" class="flat" name="posted_by"> BUILDER
                            </label>
                          </div>
                        
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Sale Type
                        </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                          
                          <div class="radio col-sm-2">
                            <label>
                              <input type="radio" value="Buy" class="flat" checked name="sale_type"> Sale
                            </label>
                          </div>
                          <div class="radio col-sm-2">
                            <label>
                              <input type="radio" value="Rent" class="flat" name="sale_type"> Rent
                            </label>
                          </div>
                         <div class="radio col-sm-2">
                            <label>
                              <input type="radio" value="Commercial" class="flat" name="sale_type"> Commercial
                            </label>
                          </div>
                        </div>
                      </div>
                   <!--    <div class="form-group">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Price</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" name="price" required="" placeholder="Property Price">
                        </div>
                      </div>
                 
                     <!--  <div class="control-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Keyword</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="tags_1" type="text" name="keyword" class="tags form-control" value="" />
                          <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                        </div>
                      </div> -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Featured Image</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="file" class="form-control" name="img" required="" >
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
        </script>