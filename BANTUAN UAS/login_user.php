<!DOCTYPE html>
<html>
<head>
	<title>Gora Barbershop Login</title>
</head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Custom Style CSS File -->
<link rel="stylesheet" type="text/css" href="css/custom-style.css">
<link rel="stylesheet" type="text/css" href="css/loaders.css"/>
<!-- Font-Awesome Style CSS File -->
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
<body style="background-image: url('./img/sec-bg-03.jpg')">
<div class="container py-5">
	<div class="row">
		<div class="col-md 12">
			<div class="row">
				<div class="col-md-5 mx-auto">

					<div class="card rounded-6">
						<div class="card-header">
							<center><h3>Login</h3></center>
						</div>
						<div class="card-body">
							<form action="" role="form" autocomplete="off" id="fromLogin" class="form" method="post">
								<div class="form-group">
									<label for="username">Username</label>
									<input type="text" class="form-control form-control-lg rounded-0" name="username"
										id="username" required="">
									<div class="invalid-feedback">Oops, you missed the one.</div>
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" class="form-control form-control-lg rounded-0"
										name="password" id="password" required="" autocomplete="new-password">
									<div class="invalid-feedback">Enter your password too!.</div>
								</div>
								<a type="submit" href="./index_user.html" class="btn btn-dark btn-block mt-5"><i class="fa fa-lock"
										aria-hidden="true"></i>&nbsp; Login</a>

						</div>
					</div>
					<div class="alert alert-secondary mt-3">
					<a class=""  style="color:black; text-align:center;"><center>Not Registed?</center> </a>
					<h5 class="text-center bg-warning align-middle" >
							<a class="btn btn-warning btn-block mt-3"  href="./register.php" style="text-decoration:none; color:white; font-family:arial;">Signup</a>
							</h5>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>