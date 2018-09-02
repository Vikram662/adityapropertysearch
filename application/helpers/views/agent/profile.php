
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Profile</h3>
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
                    <h2>My Profile <small>sub title</small></h2>
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
                     <?php if($this->session->flashdata('msg')){
                      ?>
                          <div class="alert alert-success alert-dismissible fade in" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <strong>Success !</strong> <?=$this->session->flashdata('msg'); ?>
                        </div>
                      <?php
                    }elseif ($this->session->flashdata('err')) {
                      ?>
                        <div class="alert alert-danger alert-dismissible fade in" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <strong>Error!</strong> <?=$this->session->flashdata('err'); ?>
                        </div>
                      <?php
                    } ?>  
                    <form class="form-horizontal form-label-left" action="<?=base_url('agent/profile/update/'.@$id)?>" method="post" enctype="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" value="<?=$name?>" name="name" required="" placeholder="Name">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" value="<?=$email?>" disabled  name="email" required="" placeholder="Email">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" value="<?=$phone?>" name="phone" required="" placeholder="Phone">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         
                          <input type="password" class="form-control" value="<?= $this->encryption->decrypt($password)?>" name="password" required="" placeholder="Password">
                        </div>
                      </div>
                      
                    
                   
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="submit" class="btn btn-success">Update</button>
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