<button type="button" id="btn" class="btn btn-info btn-lg" data-toggle="modal" data-target="#otp" style="visibility: hidden;">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content des">
        <div class="modal-header">
            <h4 class="modal-title">Get more Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
            <div class="modal-body">
                 <div class="contact-realtor-wrapper">
                        <div class="realtor-info">
                           <div class="realtor--contact-form" id="data">
                               <form id="enq-form" action="<?=base_url('listing/send/')?>" method="post">
                                    <div class="form-group">
                                        <input type="text" value="<?=set_value('name')?>" name="name" class="form-control" id="realtor-name" placeholder="Your Name">
                                    </div>
                                    <?=form_error('name')?>
                                    <div class="form-group">
                                        <input type="number" value="<?=set_value('phone')?>"name="phone" class="form-control" id="realtor-number" placeholder="Your Number">
                                    </div>
                                     <?=form_error('phone')?>
                                    <div class="form-group">
                                        <input type="email" value="<?=set_value('email')?>" name="email" class="form-control" id="realtor-email" placeholder="Your Mail">
                                    </div>
                                     <?=form_error('email')?>
                                    
                               
                            </div>
                    </div>
                </div>
        </div>
        <div class="modal-footer">  
          <button type="submit" id="sub" class="btn south-btn south-green">Send </button>
          <button type="button " class="btn south-btn m-1 south-red" data-dismiss="modal">Close</button>
           </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="otp" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content des">
        <div class="modal-header">
            <h4 class="modal-title">Verify  Mobile No</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
            <div class="modal-body">
                <?php if($this->session->flashdata('msg')){?>
                <h5 style="margin: 0px 158px 11px;color:red"><?=$this->session->flashdata('msg'); ?></h5>
                    <?php } ?>
                 <div class="contact-realtor-wrapper">
                        <div class="realtor-info">
                           <div class="realtor--contact-form" id="data">
                               <form id="enq-form" action="<?=base_url('listing/ver/')?>" method="post">
                                    <div class="form-group">
                                        <input type="text" value="<?=set_value('otp')?>" name="otp" class="form-control" id="realtor-name" placeholder="Your OTP">
                                        <input type="hidden" name="otp_id" value="<?=$this->session->userdata('otp_no');?>">
                                    </div>
                                    <?=form_error('name')?>
                            </div>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
          <button type="submit" id="sub" class="btn south-btn south-green">Send </button>
          <button type="button " class="btn south-btn m-1 south-red" data-dismiss="modal">Close</button>
           </form>
        </div>
      </div>
    </div>
  </div>

   <style>
.wait {
    position: fixed;
    z-index: 1;
    top: 50%;
    left: 50%;]
}</style>
      <div id="wait" class="wait"><img src='<?=base_url('assets/img/icons/laoder.gif')?>'  />

 
          <?php if($this->session->userdata('otp_no')){
    ?>
   <script>
     $(document).ready(function () {

     $("#btn").click();

  });
  </script>
    <?php
  } ?>

 <script>

    $(document).ready(function($) {

       var city='<?=$this->input->get('city') ?>';
       var offset =  0;
       var property_type = '<?=$this->input->get('property_type') ?>';
       var sale_type = "<?= $this->input->get('sale_type')?>"
         $.ajax({
                url: '<?=base_url('load/index/')?>',
                type: 'POST',
                data: {city:city,property_type:property_type,sale_type:sale_type,budget:'<?= @$this->input->get('budget')?>',offset:offset},
            })
            .done(function(data) {
              //  console.log(data);
                $('#res').html(data);
            })
            .fail(function(err) {
               // console.log(err.responseText);
                $('#res').html(err.responseText);
            })
            .always(function() {
                console.log("complete");
            });

            function data(arr){
                arrjon = new Array();
                $.each(arr,function(i,value){
                   arrjon.push(value.value);
                });
                return arrjon;
               // console.log(arr);
            }


        $('.property_type').change(function(event) {
            /* Act on the event */
           var property_type = $('input.property_type:checked').serializeArray();
               property_type = data(property_type);
               console.log(property_type);
            $.ajax({
                url: '<?=base_url('load/property_type/')?>',
                type: 'POST',
                data: {city:city,property_type:property_type,sale_type:sale_type,offset:offset},
            })
            .done(function(data) {
               // console.log(data);
                $('#res').html(data);
            })
            .fail(function(err) {
               $('#res').html(err.responseText);
            })
            .always(function() {
                console.log("complete");
            });
            
        });

        $('.budget').blur(function(event) {
            /* Act on the event */
           var minprice = $('#minprice').val();
           var maxprice = parseInt(minprice)*2;
           $('#maxprice').attr({'value':maxprice,'min':minprice});
           var maxprice = $('#maxprice').val();
              // console.log(budget);
            $.ajax({
                url: '<?=base_url('load/budget/')?>',
                type: 'POST',
                data: {city:city,property_type:property_type,minprice:minprice,maxprice:maxprice,sale_type:sale_type,offset:offset},
            })
            .done(function(data) {
               // console.log(data);
                $('#res').html(data);
            })
            .fail(function(err) {
                $('#res').html(err.responseText);
            })
            .always(function() {
                console.log("complete");
            });
            
        });

         $('.area').blur(function(event) {
            /* Act on the event */
           var minarea = $('#minarea').val();

           var maxarea = parseInt(minarea)*2;
           $('#maxarea').attr({'value':maxarea,'min':maxarea});
           var maxarea = $('#maxarea').val();
            $.ajax({
                url: '<?=base_url('load/area/')?>',
                type: 'POST',
                data: {city:city,property_type:property_type,minarea:minarea,maxarea:maxarea,sale_type:sale_type,offset:offset},
            })
            .done(function(data) {
               // console.log(data);
                $('#res').html(data);
            })
            .fail(function(err) {
                $('#res').html(err.responseText);
            })
            .always(function() {
                console.log("complete");
            });
            
        });

         $('.bhk').change(function(event) {
            /* Act on the event */
             var bhk = $('input.bhk:checked').serializeArray();
               bhk = data(bhk);
               console.log(bhk);
              // console.log(budget);
            $.ajax({
                url: '<?=base_url('load/bhk/')?>',
                type: 'POST',
                data: {city:city,property_type:property_type,bhk:bhk,sale_type:sale_type,offset:offset},
            })
            .done(function(data) {
               // console.log(data);
                $('#res').html(data);
            })
            .fail(function(err) {
                $('#res').html(err.responseText);
            })
            .always(function() {
                console.log("complete");
            });
            
        });

          $('.counstruction_status').change(function(event) {
            /* Act on the event */
             var counstruction_status = $('input.counstruction_status:checked').serializeArray();
               counstruction_status = data(counstruction_status);
               console.log(counstruction_status);
              // console.log(budget);
            $.ajax({
                url: '<?=base_url('load/counstruction_status/')?>',
                type: 'POST',
                data: {city:city,property_type:property_type,counstruction_status:counstruction_status,sale_type:sale_type,offset:offset},
            })
            .done(function(data) {
               // console.log(data);
                $('#res').html(data);
            })
            .fail(function(err) {
                $('#res').html(err.responseText);
            })
            .always(function() {
                console.log("complete");
            });
            
        });

        $('.property_condition').change(function(event) {
            /* Act on the event */
             var property_condition = $('input.property_condition:checked').serializeArray();
               property_condition = data(property_condition);
               console.log(property_condition);
              // console.log(budget);
            $.ajax({
                url: '<?=base_url('load/property_condition/')?>',
                type: 'POST',
                data: {city:city,property_type:property_type,property_condition:property_condition,sale_type:sale_type,offset:offset},
            })
            .done(function(data) {
               // console.log(data);
                $('#res').html(data);
            })
            .fail(function(err) {
                $('#res').html(err.responseText);
            })
            .always(function() {
                console.log("complete");
            });
            
        });

          $('.locality').change(function(event) {
            /* Act on the event */
             var locality = $('input.locality:checked').serializeArray();
               locality = data(locality);
               console.log(locality);
              // console.log(budget);
            $.ajax({
                url: '<?=base_url('load/locality/')?>',
                type: 'POST',
                data: {city:city,property_type:property_type,locality:locality,sale_type:sale_type,offset:offset},
            })
            .done(function(data) {
               // console.log(data);
                $('#res').html(data);
            })
            .fail(function(err) {
                $('#res').html(err.responseText);
            })
            .always(function() {
                console.log("complete");
            });
            
        });

           $('.posted_by').change(function(event) {
            /* Act on the event */
             var posted_by = $('input.posted_by:checked').serializeArray();
               posted_by = data(posted_by);
               //console.log(posted_by);
              // console.log(budget);
            $.ajax({
                url: '<?=base_url('load/posted_by/')?>',
                type: 'POST',
                data: {city:city,property_type:property_type,posted_by:posted_by,sale_type:sale_type,offset:offset},
            })
            .done(function(data) {
               // console.log(data);
                $('#res').html(data);
            })
            .fail(function(err) {
                $('#res').html(err.responseText);
            })
            .always(function() {
                console.log("complete");
            });
            
        });

        $('.amenities').change(function(event) {
            /* Act on the event */
             var amenities = $('input.amenities:checked').serializeArray();
               amenities = data(amenities);
               //console.log(amenities);
              // console.log(budget);
            $.ajax({
                url: '<?=base_url('load/amenities/')?>',
                type: 'POST',
                data: {city:city,property_type:property_type,amenities:amenities,sale_type:sale_type,offset:offset},
            })
            .done(function(data) {
               // console.log(data);
                $('#res').html(data);
            })
            .fail(function(err) {
                $('#res').html(err.responseText);
            })
            .always(function() {
                console.log("complete");
            });
            
        });

        $('.furnish').change(function(event) {
            /* Act on the event */
             var furnish = $('input.furnish:checked').serializeArray();
               furnish = data(furnish);
               //console.log(amenities);
              // console.log(budget);
            $.ajax({
                url: '<?=base_url('load/furnish/')?>',
                type: 'POST',
                data: {city:city,property_type:property_type,furnish:furnish,sale_type:sale_type,offset:offset},
            })
            .done(function(data) {
               // console.log(data);
                $('#res').html(data);
            })
            .fail(function(err) {
                $('#res').html(err.responseText);
            })
            .always(function() {
                console.log("complete");
            });
            
        });

         $('.bathroom').change(function(event) {
            /* Act on the event */
             var bathroom = $(this).val();
               // posted_by = data(posted_by);
               // console.log(posted_by);
              console.log(bathroom);
            $.ajax({
                url: '<?=base_url('load/bathroom/')?>',
                type: 'POST',
                data: {city:city,property_type:property_type,bathroom:bathroom,sale_type:sale_type,offset:offset},
            })
            .done(function(data) {
               // console.log(data);
                $('#res').html(data);
            })
            .fail(function(err) {
                $('#res').html(err.responseText);
            })
            .always(function() {
                console.log("complete");
            });
            
        });

          $('.floor').change(function(event) {
            /* Act on the event */
             var floor = $(this).val();
            $.ajax({
                url: '<?=base_url('load/floor/')?>',
                type: 'POST',
                data: {city:city,property_type:property_type,floor:floor,sale_type:sale_type,offset:offset},
            })
            .done(function(data) {
               // console.log(data);
                $('#res').html(data);
            })
            .fail(function(err) {
                $('#res').html(err.responseText);
            })
            .always(function() {
                console.log("complete");
            });
            
        });

          $('.facing').change(function(event) {
            /* Act on the event */
             var facing = $(this).val();
            $.ajax({
                url: '<?=base_url('load/facing/')?>',
                type: 'POST',
                data: {city:city,property_type:property_type,facing:facing,sale_type:sale_type,offset:offset},
            })
            .done(function(data) {
               // console.log(data);
                $('#res').html(data);
            })
            .fail(function(err) {
                $('#res').html(err.responseText);
            })
            .always(function() {
                console.log("complete");
            });
            
        });
          $('.date').change(function(event) {
            /* Act on the event */
             var date = $(this).val();
               // posted_by = data(posted_by);
               // console.log(posted_by);
              //console.log(bathroom);
            $.ajax({
                url: '<?=base_url('load/recent/')?>',
                type: 'POST',
                data: {city:city,property_type:property_type,date:date,sale_type:sale_type,offset:offset},
            })
            .done(function(data) {
               // console.log(data);
                $('#res').html(data);
            })
            .fail(function(err) {
                $('#res').html(err.responseText);
            })
            .always(function() {
                console.log("complete");
            });
            
        });
          
$(window).scroll(function () {
  //alert($(document).height());
        if ($(window).scrollTop() >= ($(document).height() - $(window).height())*0.7) {
         
          
        }
});
$('#next').click(function(event) {
  /* Act on the event */
  $.ajax({url: (" <?=base_url('load/next/')?> "), type: 'GET', dataType: 'json', success: function(e) {
  //console.log(e); // e == result from the ajax call.
   
  console.log(e);
    $.ajax({
                url: '<?=base_url('load/')?>'+e.fname,
                type: 'POST',
                data: {e},
            })
            .done(function(data) {
              //  console.log(data);
                $('#res').html(data);
                 $(window).scrollTop(0);
            })
            .fail(function(err) {
               // console.log(err.responseText);
                $('#res').html(err.responseText);
            })
            .always(function() {
                console.log("complete");
            });
}});

      
});
$('#prev').click(function(event) {
  /* Act on the event */
  $.ajax({url: (" <?=base_url('load/prev/')?> "), type: 'GET', dataType: 'json', success: function(e) {
  //console.log(e); // e == result from the ajax call.
   
  console.log(e);
    $.ajax({
                url: '<?=base_url('load/')?>'+e.fname,
                type: 'POST',
                data: {e},
            })
            .done(function(data) {
              //  console.log(data);
                $('#res').html(data);
                  $(window).scrollTop(0);

            })
            .fail(function(err) {
               // console.log(err.responseText);
                $('#res').html(err.responseText);
            })
            .always(function() {
                console.log("complete");
            });
}});

      
});
        
         $(document).ajaxStart(function(){
            $("#wait").css("display", "block");
        });
        $(document).ajaxComplete(function(){
            $("#wait").css("display", "none");
        });
    });


  </script>
 
<body>