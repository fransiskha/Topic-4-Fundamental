<?php
session_start();
if(empty($_SESSION['jmlgagal'])){
    $_SESSION['jmlgagal']=0;
} else {
    //echo '<h1>Anda gagal login ke-'.$_SESSION['jmlloginerror'].'</h1>';
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tugas 1 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">


</head>
<body class="hold-transition login-page">
   
<div class="login-box">
  <div class="login-logo">
    <a href="">
        <b>Login</b>Tugas
    </a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan Login</p>

    <form action="Kontrol/cek_Login.php" onsubmit="validasi()" method="POST">
      <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Username" name="username" id="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
        
      <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="pass" id="pass">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
            <label>
             Anda Gagal Login Sebanyak <?php echo $_SESSION['jmlloginerror']; ?>
            </label>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">          
          <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>          
        </div>
        <!-- /.col -->
      </div>
    </form>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script type="text/javascript">
function validasi(){
    var username = document.getElementById('username').value;
    var password = document.getElementById('pass').value;
      
      if(username!="" && password!=""){                  
          return true;
      }else{
          alert("Lengkapi username atau password");
          return false;
      }
}    

</script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
