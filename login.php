<!-- head and header -->
<?php

include './includes/head.php';
include './includes/header.php';

?>

<main>
  <!-- login -->
  <section id="login">
    <h2 class="text-black">LOGIN</h2>
    <form action="" method="post" class="login-form">
      <div class="mb-3">
        <label class="form-label fw-bold">Email</label>
        <input type="email" class="form-control" name="" placeholder="abc@mail.com" />
      </div>
      <div class="mb-4">
        <label class="form-label fw-bold">Password</label>
        <input type="password" class="form-control" name="" />
      </div>
      <button type="button" class="btn btn-primary w-100">Login</button>
    </form>
  </section>
</main>
<!-- footer -->
<?php include './includes/footer.php'; ?>