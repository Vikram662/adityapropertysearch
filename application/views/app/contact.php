 <!-- ##### Breadcumb Area Start ##### -->
 <?php 
   $banner =  $this->db->order_by('id', 'RANDOM')->where("'".date('Y-m-d')."'  between s_date and e_date")->get_where('advertisement', ['ad_type'=>'banner'])->row();
 ?>
 <style>   .breadcumb-area {
    height: 450px;
}</style>
    
    <section class="breadcumb-area bg-img" style="background-image: url('<?=base_url(@$banner->banner_image)?>')">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
    <section class="south-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-heading">
                        <h6>Contact info</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="content-sidebar">
                        <!-- Office Hours -->
                    
                        <!-- Address -->
                        <div class="address mt-30">
                            <h6><img src="<?=base_url('assets/')?>img/icons/phone-call.png" alt=""> +45 677 8993000 223</h6>
                            <h6><img src="<?=base_url('assets/')?>img/icons/envelope.png" alt=""> office@template.com</h6>
                            <h6><img src="<?=base_url('assets/')?>img/icons/location.png" alt=""> Main Str. no 45-46, b3, 56832,<br>Los Angeles, CA</h6>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="text" id="contact-name" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="number" id="contact-number" placeholder="Your Phone">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="contact-email" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                            </div>
                            <button type="submit" class="btn south-btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps -->
    <div class="map-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- <div id="googleMap" class="googleMap"></div> -->
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="1080" height="349" id="gmap_canvas" src="https://maps.google.com/maps?q=Aditya%20Property%2C%2084%20mayank%20colony%2C%20road%20no.%203%2C100%20feet%20road%2C%20new%20bhopalpura%2C%20udaipur%2Crajasthan&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de">pureblack.de</a></div><style>.mapouter{text-align:right;height:349px;width:1080px;}.gmap_canvas {overflow:hidden;background:none!important;height:349px;width:1080px;}</style></div>
                </div>
            </div>
        </div>
    </div>