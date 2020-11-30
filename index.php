<?php 
session_start();
if (isset($_SESSION['login'])) {
  include('connection.php');
  header('Location:'.base_url().'beranda');
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include('connection.php'); ?>
<?php include('_templates/head.php'); ?>
<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="row justify-content-center ">
                    
                    <img src="<?=base_url()?>assets/img/logo/yatindo2.png" alt="" width="100px" height="90px">
                    <p class=" h1 text-gray-900 mt-4 ml-4 font-weight-bold">SMK Tinta Emas Indonesia</p>
                  </div>
                    <h5 class="text-center text-gray-900 mt-4 mb-4">Silahkan Login </h5>
                  <form class="user" method="POST" action="login.php">
                    <div class="form-group">
                      <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp"
                        placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                      <button name="login" type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="register.html">Lupa Password ?</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include('_templates/js.php'); ?>
  
</body>

</html>