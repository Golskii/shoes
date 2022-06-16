<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$tahun = substr(date("Y"),2);
$bulan = date("m");
?>
<!DOCTYPE html>
<html lang=en>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SuperShoes </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css') ;?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/vendors/nprogress/nprogress.css') ;?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url('assets/vendors/animate.css/animate.min.css');?>" rel="stylesheet">

    <!-- Custom Theme Style -->
   <link href="<?php echo base_url('assets/build/css/custom.min.css') ;?>" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?php echo base_url('Login/login_validasi')?>" method="post">
              <h1>Login</h1>
              <?php echo $this->session->flashdata("error"); ?>
              <div>
                <input type="email" class="form-control" placeholder="Email" name="email"/>
                <span class="tex-info"><?php echo form_error('email'); ?></span>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password"/>
                <span class="tex-danger"><?php echo form_error('password'); ?></span>
              </div>
              <hr>
              <div style="display: flex;">
                <input type="submit" name="insert" value="Login" class="btn btn-dark" style="margin: auto;" />
                <!-- <span class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </span> -->
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><img src="<?php echo base_url('assets/images/logo.png');?>" width="200"></img></h1>
                  <p>©2022 All Rights Reserved. SuperShoes | Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <!-- <div id="register" class="animate form registration_form">
          <section class="login_content">
             <form action="<?php echo base_url('Login/regis_validasi')?>" method="post">
              <h1>Create Account</h1>
              <div>
               <input type="text" class="form-control" placeholder="Fullname" name="fullname"/>
               <span class="tex-info"><?php echo form_error('fullname'); ?></span>
              </div>
              <div>
               <input type="email" class="form-control" placeholder="Email" name="email"/>
               <span class="tex-info"><?php echo form_error('email'); ?></span>
              </div>
              <div>
               <input type="password" class="form-control" placeholder="Password" name="password"/>
               <span class="tex-info"><?php echo form_error('password'); ?></span>
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Alamat" name="alamat"/>
                <span class="tex-danger"><?php echo form_error('alamat'); ?></span>
              </div>
              <div>
                <input type="number" class="form-control" placeholder="No.Telpon" name="telpon"/>
                <span class="tex-danger"><?php echo form_error('telpon'); ?></span>
              </div>
              <br>
              <div>
                <select data-toggle="dropdown" class="form-control" type="button" aria-expanded="true" name="role" ><span class="caret"></span>
                          <option value=' ';><a >-- Pilih --</a></option> 
                          <option value='2';><a >SALES</a></option>
                          <option value='3';><a >PURCHASER</a></option>
                </select>
                <span class="tex-danger"><?php echo form_error('role'); ?></span>
              </div>
              <hr>
              <div>
                <button type="submit" name="insert" value="create" class="btn btn-dark">Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><img src="<?php echo base_url('assets/images/logoswts.png');?>" width="100" height="50" "></img> PT. SWTS Indonesia</h1>
                  <p>©2017 All Rights Reserved. PT SWTS Indonesia | Heavy Industry Engineering Services & Automation Systems. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div> -->
      </div>
    </div>
  </body>
</html>
