<!-- head and header -->
<?php

include './includes/head.php';
include './includes/header.php';

?>

<main>
  <!-- login -->
  <section id="login">
    <div class="container-fluid">
      <!-- login title -->
      <div class="row m-3">
        <div class="col-12 text-uppercase text-center text-white">
          <h2>Login</h2>
        </div>
      </div>
      <!-- form -->
      <div class="row">
        <!-- Display error message if it exists -->
        <div class='col-12 text-center'>
          <?php if(isset($_GET['error'])) { ?>
              <div class="alert alert-danger w-25 mx-auto" role="alert">
                  <?php echo $_GET['error']; ?>
              </div>
          <?php } ?>
        </div>
        <!-- login form -->
        <div class='col-12'>
          <form action="queries/login_form.php" method="POST" class="login-form mx-auto">
            <div class="mb-3">
              <label class="form-label fw-bold text-white">Email</label>
              <input type="email" class="form-control" name="email" placeholder="example@gmail.com" required />
            </div>
            <div class="mb-4">
              <label class="form-label fw-bold text-white">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password" required />
            </div>
            <button type="submit" name="login" class="btn btn-primary w-100 fw-bold">LOGIN</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- footer -->
<?php include './includes/footer.php'; ?>