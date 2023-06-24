<!-- head and header -->
<?php

include './includes/head.php';
include './includes/header.php';

?>

<main>
  <section id="contact">
    <!-- contact us title -->
    <div class="row m-3">
      <div class="col-12 text-uppercase text-center text-white">
        <h2>Contact Us</h2>
      </div>
    </div>
    <div class="row mt-5">
      <?php
        $query = "SELECT * FROM contact";
        $query_conn = mysqli_query($connection, $query);

        while ($result = mysqli_fetch_assoc($query_conn)) {
          $contact_id = $result['id'];
          $email = $result['email'];
          $contact_number = $result['contact_number'];
          $address = $result['address'];
        }
      ?>
      <div class="col-6">
        <div class="contact-info text-white fs-5 d-flex flex-column justify-content-center gap-5">
          <div class="d-flex flex-row align-items-center">
            <i class="fa-solid fa-phone"></i>
            <p class="m-0 ms-4"><?php echo $contact_number; ?></p>
          </div>
          <div class="d-flex flex-row align-items-center">
            <i class="fa-solid fa-envelope"></i>
            <p class="m-0 ms-4"><?php echo $email; ?></p>
          </div>
          <div class="d-flex flex-row align-items-center">
            <i class="fa-solid fa-location-dot"></i>
            <p class="m-0 ms-4 ps-1"><?php echo $address; ?></p>
          </div>
        </div>
      </div>
      <div class="col-6">
        <form action="queries/contact_form.php" method="POST">
          <div class="mb-3">
            <label class="form-label fw-bold text-white">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" required>
          </div>
          <div class="mb-3">
            <label class="form-label fw-bold text-white">Email</label>
            <input type="email" name="email" class="form-control" placeholder="abc@gmail.com" required>
          </div>
          <div class="mb-3">
            <label class="form-label fw-bold text-white">Message</label>
            <textarea class="form-control" name="message" placeholder="Type your message here..." style="height: 240px" required></textarea>
          </div>
          <button class="btn btn-primary" type="submit" name='submit'>Submit</button>
        </form>
      </div>
    </div>
  </section>
</main>
<!-- footer -->
<?php include './includes/footer.php'; ?>