<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--<title>Hello, world!</title>-->
    <title>Gora Admin</title>

  </head>
  <body>

<!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
    <div class="container">
  <a class="navbar-brand" href="./admin.php">Gora Barbershop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </div>
  <div class="float-right"  style="margin-left:100px;">
      <a href="./login_admin.php" class="btn btn-danger" >Log Out</a>
      </div>
</nav>

<div class="container" style="margin-top:4%;">
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Username</th>
      <th scope="col">Full Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email Address</th>
      <th scope="col">Enter Address</th>
      <th scope="col">Message</th>      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>joni</td>
      <td>Joni Altar</td>
      <td>089823713923</td>
      <td>joni21@gmail.com</td>
      <td>Malang</td>
      <td>
      <div class="form-group">
							<button onclick="swal('Message','Good job buat Gora Barbershop')" class="btn btn-success float-left mr-2">Message</button>
						</div>	
      </td>
    </tr>
    <tr>
    <th scope="row">2</th>
      <td>reza</td>
      <td>Reza Nanda</td>
      <td>083243743213</td>
      <td>reza09@gmail.com</td>
      <td>Probolinggo</td>   
      <td>
      <div class="form-group">
							<button onclick="swal('Message','Maju terus Gora Barbershop')" class="btn btn-success float-left mr-2">Message</button>
						</div>	
      </td> 
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>erry</td>
      <td>Erry Gautama</td>
      <td>081235641123</td>
      <td>erry99@gmail.com</td>
      <td>Kediri</td>
      <td>
      <div class="form-group">
							<button onclick="swal('Message','Gora Barbershop is the best')" class="btn btn-success float-left mr-2">Message</button>
						</div>	
      </td>    
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>tri</td>
      <td>Tri Ardi</td>
      <td>085235747390</td>
      <td>tri89@gmail.com</td>
      <td>Bojonegoro</td>    
      <td>
      <div class="form-group">
							<button onclick="swal('Message','Gora Barbershop akan selalu jadi yang terbaik')" class="btn btn-success float-left mr-2">Message</button>
						</div>	
      </td>
    </tr>
  </tbody>
</table>
</div>
