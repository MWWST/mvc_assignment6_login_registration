<?php
?>
<html>
<head>
	<title>Login and Registraiton</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

      <form class="form-signin" action="login/welcome" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="loginemail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name ="loginpassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

      </form>

      <form class="form-signin" action ="login/register" method="post">
        <h2 class="form-signin-heading">Or Register</h2>
        <label for="inputFirstName" class="sr-only">First Name</label>
        <input type="text" id="inputFirstName" name="first_name" class="form-control" placeholder="First Name" required autofocus>
         <label for="inputLastName" class="sr-only">Last Name</label>
        <input type="text" id="inputEmail" name="last_name" class="form-control" placeholder="Last Name" required autofocus>
		<label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password_"class="form-control" placeholder="Password" required>
        <div class="checkbox">
        <label for="inputPassword" class="sr-only">Confirm Password</label>
        <input type="password" id="inputPassword" name="pw_confirm"class="form-control" placeholder=" Confirm Password" required>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <input type="hidden" name="register" value="register">
        
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>