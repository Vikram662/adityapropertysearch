<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aditya Property  ! | </title>

    <!-- Bootstrap -->
    <link href="<?=base_url('assets/admin/')?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url('assets/admin/')?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url('assets/admin/')?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?=base_url('assets/admin/')?>vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url('assets/admin/')?>build/css/custom.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/admin/')?>vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="<?=base_url('assets/admin/')?>vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="<?=base_url('assets/admin/')?>vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" id="login" action="<?=base_url('login/signin')?> ">
              <h1>Login Form</h1>
              <div>
                <input type="email" class="form-control" placeholder="Username" name="email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required="" />
              </div>
              <div>
                <a class="btn btn-default " id="log">Log in</a>
                <a class="reset_pass" href="<?=base_url('login/forget')?>">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Aditya Property!</h1>
                  <p>©2018 All Rights Reserved. Aditya Real Group! . Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="post" id="signupform" action="<?=base_url('login/signup')?> ">
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Name." name="name" required="" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Mobile No." name="phone" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" name="email" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="password" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Confirm Password" required="" name="cpassword" />
              </div>
              <div>
                <a class="btn btn-default " id="sig" >Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Aditya Property!</h1>
                  <p>©2016 All Rights Reserved. GAditya Real Group!. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
       
      </div>
    </div>
  </body>
</html>

<!-- jQuery -->
<script src="<?=base_url('assets/admin/')?>vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?=base_url('assets/admin/')?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- PNotify -->
<script src="<?=base_url('assets/admin/')?>vendors/pnotify/dist/pnotify.js"></script>
<script src="<?=base_url('assets/admin/')?>vendors/pnotify/dist/pnotify.buttons.js"></script>
<script src="<?=base_url('assets/admin/')?>vendors/pnotify/dist/pnotify.nonblock.js"></script>
<script>
    function successNotify(msg){
        new PNotify({
                title: 'Success !',
                text: msg,
                type: 'success',
                styling: 'bootstrap3'
            });
    }
    function errorNotify(msg){
        new PNotify({
                title: 'Warning !',
                text: msg,
                type: 'error',
                styling: 'bootstrap3'
            });
    }
    function formData(data){
      var res = $('#'+data).serializeArray().reduce(function(obj, item) {
      obj[item.name] = item.value;
      return obj;
      }, {});
        return res;
    }

   $('#log').click(function(){
        var  data = formData('login');
        $.ajax({
          url: '<?=base_url('login/chcek')?>',
          type: 'POST',
          data: data,
        })
        .done(function(data) {
          console.log(data);
          var json = JSON.parse(data);
          if(json.success==true){
            $.each(json.res,function(i,err){
              successNotify(err);
            })
            setTimeout(function() {  window.location = `<?=base_url('login')?>` }, 2000); 
          }else{
            $.each(json.res,function(i,err){
              errorNotify(err);
            })
          }
        })
        .fail(function(err) {
          console.log(err);
        })
        .always(function() {
          console.log("complete");
        });
   });
   $('#sig').click(function(){
    var  data = formData('signupform');
        $.ajax({
          url: '<?=base_url('login/signup')?>',
          type: 'POST',
          data: data,
        })
        .done(function(data) {
          console.log(data);
          var json = JSON.parse(data);
          if(json.success==true){
            $.each(json.res,function(i,err){
              successNotify(err);
            })
            setTimeout(function() {  window.location = `<?=base_url('login')?>` }, 2000); 
          }else{
            $.each(json.res,function(i,err){
              errorNotify(err);
            })
          }
        })
        .fail(function(err) {
          console.log(err);
        })
        .always(function() {
          console.log("complete");
        });
   });
</script>