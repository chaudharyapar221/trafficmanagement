<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>
 <style>
   body
   {
     background-image: url('<?php echo validate_image($_settings->info('cover')) ?>');
     background-size:cover;
     background-repeat:no-repeat;
   }
 </style>
 <img style="" src="https://www.moljpa.gov.np/wp-content/uploads/2017/11/flag.gif">
<body class="hold-transition login-page ">
  <script>
    start_loader()
  </script>
  <h2 style="letter-spacing:10px; font-size:20px;"  class="text-center pb-4 mb-4 text-light"><?php echo $_settings->info('name') ?> </br></h2>
<div class="login-box">
  <!-- /.login-logo -->
  
    <div class="card-body">
      <form id="login-frm" action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
       
          <!-- /.col -->
          <div class="col text-center">
            <button style="height:40px; width:170px; background-color:transparent; color:white; border: 2px solid white; border-radius:6px; border-shadow: 0 2px 6px 15px solid white;" type="submit" >Sign In</button>
  <footer class="py-5">
            <div class="container" >
              <p class="m-0 text-center text-white">Allright Reserved &copy; <?php echo $_settings->info('short_name') ?> 2023</p>
              <p class="m-0 text-center text-white">Developed By: <a style="text-decoration:none; color:white;" href="https://chaudharyapar.com.np/">Mr. Arya Singh</a></p>
          </div>
        </footer>

          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function(){
    end_loader();
  })
</script>
</body>
</html>