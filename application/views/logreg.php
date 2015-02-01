<?php
?>
<html>
<head>
	<title>Michael Weitzman: Login and Registraiton</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<style type="text/css">
.jumbotron {
	background:url('./assets/img/happy.jpg') no-repeat;
	height:305px;
}

h2 {
	margin-top: 0px;
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
    <form class="navbar-form navbar-right" action="login/welcome" method="post">
        <!-- <h2 class="form-signin-heading">Please sign in</h2> -->
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="loginemail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name ="loginpassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-sm btn-primary" type="submit">Sign in</button>

      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<div class="row">
		<div class="col-md-8">
     <div class="jumbotron">
  <h1>Join the party!</h1>
  <p>Fun beach connections...</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>
  </div>
		<div class="col-md-4">
      <form class="form-signin" action ="login/register" method="post">
        <h2 class="form-signin-heading">New Here? Sign Up!</h2>
        <label for="inputFirstName" class="sr-only">First Name</label>
        <p><input type="text" id="inputFirstName" name="first_name" class="form-control" placeholder="First Name" required autofocus></p>
         <label for="inputLastName" class="sr-only">Last Name</label>
        <p><input type="text" id="inputEmail" name="last_name" class="form-control" placeholder="Last Name" required autofocus></p>
		<label for="inputEmail" class="sr-only">Email</label>
        <p><input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus></p>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password_"class="form-control" placeholder="Password" required>
        <div class="checkbox">
        <label for="inputPassword" class="sr-only">Confirm Password</label>
        <input type="password" id="inputPassword" name="pw_confirm"class="form-control" placeholder=" Confirm Password" required>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <input type="hidden" name="register" value="register">
        
      </form>
  </div>
</div>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>