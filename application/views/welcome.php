<?php
?>

<html>
<head>
	<title>Welcome</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<style type="text/css">

.thumbnail {
	width:300px;
}
</style>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Login and Registration</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <!--  <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        </li> -->
      </ul>
     <p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link"><?=$this->session->userdata('user_name')." ";?></a><a href="/login/welcome"><button type="button" class="btn btn-default navbar-btn">Log Out</button></a></p>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

		<div class="row">
		<div class="col-md-6">
			<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <!-- <img src="..." alt="..."> -->
      <div class="caption">
        <h3>User Info</h3>
        <p><span class="label label-primary">First Name:</span><?=" ".$this->session->userdata('user_first_name');?></p>
			<p><span class="label label-primary">Last Name:</span><?=" ".$this->session->userdata('user_last_name');?></p>
			<p><span class="label label-primary">Email:</span><?=" ".$this->session->userdata('user_email');?></p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>

			
		</div>
  		<div class="col-md-6"></div>
		
	</div>
</div>
</body>
</html>