<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-box-msg">
      
    </div>
    <!-- /.login-logo -->
    <div class="card-body">
      <div class="card-link login-card-body">
        <p class="login-box-msg">Login Sistem Direktori Data Mesjid</p>

        <form id="form" onsubmit="login()">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" id="uname" required>
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" id="pswrd" required>
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-greensea">
                <label for="remember">
                  <a href="registrasi-user.html">Create Account</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-outline-danger">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center mb-3">
          <p>- OR -</p>
          <a href="https://id-id.facebook.com/login/device-based/regular/login/?login_attempt=1"
            class="btn btn-block btn-primary">
            <i class="fab fa-facebook-f mr-2"></i> Sign in using Facebook
          </a>
          <a href="https://accounts.google.com/v3/signin/identifier?dsh=S1997018989%3A1673615969088957&elo=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin&ifkv=AeAAQh7uEL0-F-06hYr_6K3Nf2jeMJLyTKhO2P4ftVxPtsA9XEypVlSrUl74Ft8-_rM3Brl_AYbm"
            class="btn btn-block btn-danger">
            <i class="fab fa-google-plus-g mr-2"></i> Sign in using Google+
          </a>
        </div>
        <!-- /.social-auth-links -->
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        <strong>Develop By Mahasiswa STT - NF @2022</strong>
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>


  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <script>
    function login() {
      event.preventDefault();
      pswrd = document.getElementById("pswrd").value;
      uname = document.getElementById("uname").value;

      
      if (uname == "admin" && pswrd == "admin123") {
        window.alert("Login sukses");
        window.location = ("tbl-berita.html");
      } else {
        event.preventDefault();
        window.alert("gagal");
      }
    }
  </script>
</body>

</html>