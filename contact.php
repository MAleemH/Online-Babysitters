<!-- head and header -->
<?php

include './includes/head.php';
include './includes/header.php';

?>

<main>
  <section id="contact">
    <!-- contact us title -->
    <div class="row m-3">
      <div class="col-12 text-uppercase text-center">
        <h2>Contact Us</h2>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-6">
        <div class="contact-info text-white fs-5 d-flex flex-column justify-content-center gap-5">
          <div class="d-flex flex-row align-items-center">
            <i class="fa-solid fa-phone"></i>
            <p class="m-0 ms-4">+923334455666</p>
          </div>
          <div class="d-flex flex-row align-items-center">
            <i class="fa-solid fa-envelope"></i>
            <p class="m-0 ms-4">contact@onlinebabysitters.com</p>
          </div>
          <div class="d-flex flex-row align-items-center">
            <i class="fa-solid fa-location-dot"></i>
            <p class="m-0 ms-4 ps-1">abc Street, xyz City, Pakistan</p>
          </div>
        </div>
      </div>
      <div class="col-6">
        <form action="" method="post">
          <div class="mb-3">
            <label for="" class="form-label fw-bold">Name</label>
            <input type="text" name="" class="form-control" placeholder="Name">
          </div>
          <div class="mb-3">
            <label for="" class="form-label fw-bold">Email</label>
            <input type="email" name="" class="form-control" placeholder="abc@gmail.com">
          </div>
          <div class="mb-3">
            <label for="" class="form-label fw-bold">Message</label>
            <textarea class="form-control" name="" rows="9" placeholder="Type your message here..."></textarea>
          </div>
          <button class="btn btn-primary" type="submit">Submit</button>
        </form>
      </div>
    </div>
  </section>
</main>
<!-- footer -->
<?php include './includes/footer.php'; ?>