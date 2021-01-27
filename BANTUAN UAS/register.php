<!DOCTYPE html>
<html>
<head>
	<title>Gora Barbershop SignUp</title>
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
							<center><h3>SignUp</h3></center>
						</div>
						<div class="card-body">
							<form action="" role="form" autocomplete="off" id="fromLogin" class="form" method="post">
								<div class="form-group">
									<label for="username">FullName</label>
									<input type="text" class="form-control form-control-lg rounded-0" name="username"
										id="username" required="">
									<div class="invalid-feedback">Oops, you missed the one.</div>
                                </div>
                                <div class="form-group">
									<label for="username">Email Address</label>
									<input type="text" class="form-control form-control-lg rounded-0" name="username"
										id="username" required="">
									<div class="invalid-feedback">Oops, you missed the one.</div>
                                </div>
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
								<button type="submit" class="btn btn-dark btn-block mt-5"><i
										aria-hidden="true"></i>SignUp</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>