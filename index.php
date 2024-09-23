<?php
session_start();
include ("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login - MTs NEGERI PATI</title>
  <link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f8f9fa;
      margin: 0;
    }
    .login-container {
      background: #fff;
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 300px;
    }
    .login-container img {
      width: 100px;
      margin-bottom: 1rem;
    }
    .login-container h1 {
      font-size: 1.5rem;
      margin-bottom: 1.5rem;
    }
    .form-control {
      border-radius: 50px;
      margin-bottom: 1rem;
    }
    .btn-primary {
      border-radius: 50px;
      background: linear-gradient(90deg, #1CB5E0 0%, #000851 100%);
      border: none;
      padding: 0.5rem 1.5rem;
      margin: 0.5rem 0.5rem
    }
    .btn-primary:hover {
      background: linear-gradient(90deg, #000851 0%, #1CB5E0 100%);
    }
  </style>
</head>
<body>
  <div class="login-container">
    <section class="section-margin" id="login">
      <div class="container">
        <div class="row content">
          <div class="col-lg-12 text-center">
            <div class="login-panel">
              <h1>LOGIN</h1>
              <ul class="list-inline" id="chart-skill">
                <li><a href="login.php"><button class="btn btn-primary">Login Admin</button></a></li>
                <li><a href="karyawan/login_karyawan.php"><button class="btn btn-primary">Login Karyawan</button></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
