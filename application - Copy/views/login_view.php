<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Sign In</title>
  <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>

<body>

  <div class="container">
    <div class="col-md-4 col-md-offset-4">
      <form class="form-signin" action="<?php echo site_url('login/auth'); ?>" method="post">
        <center>
          <h2 class="form-signin-heading">Login Akun</h2>
          <center>
            <?php echo $this->session->flashdata('msg'); ?>
            <br><br><br><br>
            <label for="username" class="sr-only">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
            <br>
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <div>
              <br>
              <label>
                <a href="<?php echo site_url('login/daftar'); ?>">Regristrasi</a>
              </label>
              <br>
            </div>
            <button class="btn btn-lg btn-success btn-block" type="submit">Masuk</button>
      </form>
    </div>
  </div> <!-- /container -->

  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>

</html>