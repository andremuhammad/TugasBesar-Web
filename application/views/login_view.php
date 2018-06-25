<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Authentikasi</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body background="<?php echo base_url();?>images/m1.jpg">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <nav class="navbar navbar-inverse" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Remas Cahyaningati</a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav ">
                <li class="active"> <a href="<?= base_url('index.php'); ?>"><i class="glyphicon glyphicon-home"> Home </i></a></li>
              </ul>
              <ul class="nav navbar-nav ">
                <li class=""> <a href="<?php echo base_url('index.php'); ?>"> Artikel </i></a></li>
                </ul>
                <ul class="nav navbar-nav ">
                <li class=""> <a href="<?php echo base_url('index.php'); ?>"> Tentang </i></a></li>
                </ul>
                <ul class="nav navbar-nav ">
                <li class=""> <a href="<?php echo base_url('index.php'); ?>"> Keanggotaan </i></a></li>
                </ul>
                <ul class="nav navbar-nav ">
                <li class=""> <a href="<?php echo base_url('index.php'); ?>"> Lokasi </i></a></li>
                </ul>
              
            </div><!-- /.navbar-collapse -->
              
        </nav>
<div class="container">
  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
	<!--div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"-->
		<?php echo form_open('login/cekLogin') ?>
    <br><br><br>
    <div class="panel panel-default">
          <div class="panel-heading">
            <strong><legend><center class="panel-title">LOGIN PAGE</center></legend></strong>

		<!--div class="form-group">
			<legend>Login Page</legend>
		</div-->

		<?php echo validation_errors(); ?>
		<div class="form-group">
			<label for="">Username</label>
			<input type="text" class="form-control" id="username" name="username" placeholder="Input field">

		</div>

		<div class="form-group">
			<label for="">Password</label>
			<input type="Password" class="form-control" id="password" name="password" placeholder="Input field">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-lg btn-primary btn-block">LOGIN</button>
      <!--button><a href="<?php echo base_url('index.php/Login/register') ?>" class="btn btn-warning">Daftar</a></button-->
		</div>
		<a href="<?php echo base_url('index.php/Login/register') ?>" class="btn btn-lg btn-success btn-block">REGISTER</a>
	</div>
</div>
</div>
</div>
</div>
</nav>
</div>
</div>
</body>
</html>
