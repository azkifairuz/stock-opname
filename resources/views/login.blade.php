<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>inventory | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{asset('AdminLTE')}}/index2.html"><b>Login</b> Inventory</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
  @if($message = Session::get('error'))
  <div id='alert-success' class="col-12 mb-5">
    <div class="alert col-12 alert-danger mb-0 alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h5><i class="icon fas fa-ban"></i> {{$message}}!</h5>
    
    </div>
   
    <div class="progress progress-xs bg-light col-12 p-0  mt-0">
        <div sty id="progress-bar" class="progress-bar bg-danger " role="progressbar" style="width: 100%; "></div>
    </div>
  </div>
  @endif
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silahkan Masuk</p>
      <form action="{{ route('ceklogin') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name ="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('AdminLTE')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE')}}/dist/js/adminlte.min.js"></script>
<script>
  

// Menambahkan progres bar animasi
let progressBar = $('#progress-bar');
let progress = 100;
let totalDuration = 2000; // Total durasi dalam milidetik
let intervalDuration = 50; // Durasi interval dalam milidetik
let steps = totalDuration / intervalDuration;

let interval = setInterval(function() {
    progress -= 100 / steps; // Mengurangi panjang progres bar setiap interval
    progressBar.css('width', progress + '%');

    if (progress <= 0) {
        clearInterval(interval);
        
        // Menunggu sebentar sebelum memulai fadeOut
        setTimeout(function() {
            $('#alert-success').fadeOut('fast', function() {
                $(this).remove(); // Menghapus alert setelah fade out selesai
            });
        }, 200); // Misalnya, menunggu 200ms sebelum fadeOut dimulai
    }
}, intervalDuration);
</script>
</body>
</html>
