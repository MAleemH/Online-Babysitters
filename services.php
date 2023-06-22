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
          <h2 class="text-black">Our Services</h2>
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

                <div class="carousel-item">
                  <img src="images/<?php echo $service_image; ?>" alt="Service-Image" class="service-image">
                  <h3 class="service-title"><?php echo $service_name; ?></h3>
                  <p class="service-description"><?php echo $service_description; ?></p>
                </div>

                <?php
                    }
                ?>
            </div>
            <button class="carousel-button prev-button" type="button">&lt;</button>
            <button class="carousel-button next-button" type="button">&gt;</button>
        </div>
    </div>
  </section>
</main>
<!-- footer -->
<?php include './includes/footer.php'; ?>