<html lang = "en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Register</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- CSS File -->
    <link rel='stylesheet' type='text/css' media='screen' href="style1.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="aos-master/dist/aos.css">
</head>

<body>
    <div class="sidenav container-bg">
        <img src="img/WastOProfil.png" width="130" height="130" class="rounded-circle mt-3 md-4 ml-5">
        <div class="Semboyan">
            <p><b>GO</b> Waste <b>GO</b> Stack </p>
        </div>
        <div class="login-main-text">
            <h2><b>Wast'</b><i>O</i><br>Masuk</h2>
            <p>Login or register from here to access.</p>
        </div>
    </div>

    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <form action="RegistrasiProses.php" method="GET">
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" class="form-control" placeholder="Id" name="iod">
                    </div>
                    <div class="form-group">
                        <label>UserName</label>
                        <input type="text" class="form-control" placeholder="UserName" name="username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control" placeholder="Tanggal Lahir" name="ttl">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea cols="20" rows="5" class="form-control" placeholder="Alamat" name="alamat"></textarea>
                    </div>
                    <button type="submit" class="btn btn-black">Register</button>
                    </form>
            </div>
        </div>
    </div>

    <!-- Jquery & Javascript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.min.css"></script>
</body>

</html>