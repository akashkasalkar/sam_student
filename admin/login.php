<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<?php include "../include/bs4.php"; ?>
	<style>
body {
 background-image: url("../img/paper.jpg");
 background-size: cover;
}
.col-lg-6{
	margin-top: 100px;
}
</style>
</head>
<body>
	<div class="container">
		<div class="col-lg-6 col-sm-6 offset-3 ">
			<h4 class=" text-center mb-4 mt-1">Sign in</h4>
			<hr>
			<p class="text-light h5 text-center">Enter Email & Password</p>
			<form method="post">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
		  					  <span class="input-group-text"> <i class="fa fa-user"></i> </span>
						 </div>
						<input name="email" class="form-control" placeholder="Email " type="email" required="">
					</div> <!-- input-group.// -->
				</div> <!-- form-group// -->
				<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
					    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
					 </div>
				    <input class="form-control" placeholder="password" type="password" name="password" required="">
				</div> <!-- input-group.// -->
				</div> <!-- form-group// -->
				<div class="form-group">
					<button type="submit" class="btn btn-success btn-block"> Login  </button>
				</div> <!-- form-group// -->
				<p class="text-center "><a href="#" class=" text-danger h6">Forgot password?</a></p>
						</form>
					</div>
				</div>
</body>
</html>




