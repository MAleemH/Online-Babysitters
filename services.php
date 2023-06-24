<!-- head and header -->
<?php

include './includes/head.php';
include './includes/header.php';

?>

<main>
  <!-- Services -->
  <section id="services">
    <div class="container-fluid">
      <!-- services title -->
      <div class="row m-3">
        <div class="col-12 text-uppercase text-center text-white">
          <h2>Our Services</h2>
        </div>
      </div>
      <!-- daycare services -->
      <div class="row">
        <div class="carousel-container">
          <div class="carousel" id='services-carousel'>
            <?php

            $query = "SELECT * FROM services";
            $query_conn = mysqli_query($connection, $query);

            while ($result = mysqli_fetch_assoc($query_conn)) {
              $service_id = $result['service_id'];
              $service_name = $result['name'];
              $service_image = $result['photo'];
              $service_description = $result['description'];

              ?>

              <div class="carousel-item" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('images/<?php echo $service_image; ?>'); background-position: center; background-size: cover; background-repeat: no-repeat;">
                <h3 class="service-title">
                  <?php echo $service_name; ?>
                </h3>
                <p class="service-description">
                  <?php echo $service_description; ?>
                </p>
              </div>

              <?php
            }
            ?>
          </div>
          <button class="carousel-button prev-button" type="button">&lt;</button>
          <button class="carousel-button next-button" type="button">&gt;</button>
        </div>
      </div>
      <!-- babysitters title -->
      <div class="row m-4">
        <div class="col-12 text-uppercase text-center text-white">
          <h2>Our Babysitters</h2>
        </div>
      </div>
      <!-- babysitters -->
      <div class="row mt-1">
        <div class="carousel-container">
          <div class="carousel" id='babysitters-carousel'>
            <?php

              $query = "SELECT * FROM babysitters";
              $query_conn = mysqli_query($connection, $query);

              while ($result = mysqli_fetch_assoc($query_conn)) {
                  $babysitter_id = $result['babysitter_id'];
                  $name = $result['name'];
                  $image = $result['photo'];
                  $address = $result['address'];
                  $contact = $result['contact_number'];
                  $emergency_contact = $result['emergency_contact_number'];
                  $type = $result['type'];

            ?>
            <div class="card mb-3 me-3 bCarousel-item" style="max-width: 500px; max-height: 250px;">
              <div class="row g-0 h-100">
                <div class="col-md-4" style="height: 100%; overflow: hidden;">
                  <img src="images/<?php echo $image; ?>" class="img-fluid rounded-start h-100" alt="Babysitter-Image" style="height: 100%; object-fit: cover;">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $name; ?></h5>
                    <p class="card-text"><small class="text-muted"><?php echo $type; ?> Babysitter</small></p>
                    <div class='d-flex mb-3'>
                      <p class="card-text m-0"><b>Contact:</b> <?php echo $contact; ?></p>
                      <p class="card-text m-0"><b>Emergency Contact:</b> <?php echo $emergency_contact; ?></p>
                    </div>
                    <p class="card-text"><b>Address:</b><br> <?php echo $address; ?></p>
                  </div>
                </div>
              </div>
            </div>
            <?php
              }
            ?>
          </div>
          <button class="carousel-button prev-btn" type="button">&lt;</button>
          <button class="carousel-button next-btn" type="button">&gt;</button>
        </div>
      </div>
    </div>
    <!-- child enrollment button -->
    <div class='w-100 text-center mt-4'>
      <a class="btn btn-success w-25" href="child_enrollment.php">Enroll Your Child</a>
    </div>
  </section>
</main>
<!-- footer -->
<?php include './includes/footer.php'; ?>