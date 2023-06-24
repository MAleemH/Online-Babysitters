<!-- head and header -->
<?php

include './includes/head.php';
include './includes/header.php';

?>

<main>
  <!-- About -->
  <section id="about">
    <!-- about us title -->
    <div class="row m-3">
      <div class="col-12 text-uppercase text-center text-white">
        <h2>About Us</h2>
      </div>
    </div>
    <!-- about details -->
    <div class="row g-0">
      <?php
      $query = "SELECT * FROM about";
      $query_conn = mysqli_query($connection, $query);

      while ($result = mysqli_fetch_assoc($query_conn)) {
        $about_id = $result['id'];
        $title = $result['title'];
        $description = $result['description'];

        ?>

        <div class='col-12 mb-3'>
          <h4 class="text-white w-75"><?php echo $title; ?></h4>
          <p class="text-white w-75">
            <?php echo $description; ?>
          </p>
        </div>

        <?php

      }

      ?>
    </div>
  </section>
</main>
<!-- footer -->
<?php include './includes/footer.php'; ?>