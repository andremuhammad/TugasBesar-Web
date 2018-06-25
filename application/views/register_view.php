<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  </head>

  <body> 
    <form class="form-signin" method="post" action="<?php echo base_url('index.php/Login/register') ?>">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="text-center" class="h3 mb-3 font-weight-normal"><strong><legend>REGISTER PAGE</legend></strong></h1>

      <?php echo validation_errors(); ?>
      <div class="form-group">
      <label for="">Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Username">
      </div>
      <div class="form-group">
      <label for="">Password</label>
      <input type="Password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
      
      <button class="btn btn-lg btn-success btn-block" type="submit">REGISTER</button>

    </form>
  </body>
</html>
<style>
	html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>