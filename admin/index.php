<!-- head, sidebar and dashboard functions -->
<?php

include '../includes/admin_head.php';
include '../includes/admin_sidebar.php';
require_once '../queries/dashboard_functions.php';

?>

<section class="home-section">
  <!-- navbar -->
  <?php
  include '../includes/admin_navbar.php';
  ?>

  <div class="home-content">
    <div class="overview-boxes">
      <div class="box">
        <div class="right-side">
          <div class="box-topic">Total Babysitters</div>
          <div class="number"><?php echo getTotalBabysitters($connection); ?></div>
        </div>
        <i class='bx bx-group cart'></i>
      </div>
      <div class="box">
        <div class="right-side">
          <div class="box-topic">Total Subscribers</div>
          <div class="number">38</div>
        </div>
        <i class='bx bxs-group cart two'></i>
      </div>
      <div class="box">
        <div class="right-side">
          <div class="box-topic">Total Services</div>
          <div class="number"><?php echo getTotalServices($connection); ?></div>
        </div>
        <i class='bx bx-category cart three'></i>
      </div>
      <div class="box">
        <div class="right-side">
          <div class="box-topic">Total New Enrollment</div>
          <div class="number"><?php echo getTotalNewEnrollments($connection, 'Pending'); ?></div>
        </div>
        <i class='bx bx-user-pin cart five'></i>
      </div>
      <div class="box">
        <div class="right-side">
          <div class="box-topic">Total Accepted Enrollment</div>
          <div class="number"><?php echo getTotalAcceptedEnrollments($connection, 'Accepted'); ?></div>
        </div>
        <i class='bx bx-user-plus cart two'></i>
      </div>
      <div class="box">
        <div class="right-side">
          <div class="box-topic">Total Rejected Enrollment</div>
          <div class="number"><?php echo getTotalRejectedEnrollments($connection, 'Rejected'); ?></div>
        </div>
        <i class='bx bx-user-minus cart four'></i>
      </div>
    </div>

    <div class="other-details">
      <div>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium pariatur sit vel animi nulla in, blanditiis
        placeat repellat tempore voluptas reprehenderit laborum sint minus velit facilis natus sequi vero perferendis?
        Repellat reprehenderit quibusdam voluptate non recusandae hic reiciendis blanditiis consequatur sit dolorum est
        fugiat, dolores magnam doloremque illum, repudiandae architecto saepe! Consequuntur, ipsam. Ut animi, ipsa
        repellat nisi obcaecati totam!
        Deleniti excepturi commodi inventore sapiente cupiditate alias autem amet illum incidunt harum tempore quam,
        assumenda quibusdam culpa ullam cum numquam esse recusandae sed laborum nulla, repellat vitae qui. In, velit!
        Illum excepturi tempora esse debitis ea veniam quibusdam distinctio impedit ratione sed tempore blanditiis quae
        hic magnam, aperiam quisquam, nesciunt a modi eligendi, voluptate voluptates pariatur rem. Debitis, qui dicta.
        Distinctio sit illo dolorem neque rem modi unde optio doloribus aperiam, itaque iste officia maxime eos
        inventore? Illo, earum repellat eligendi, nemo numquam similique dolorem non quaerat nihil, labore rerum!
        Veritatis repellat aspernatur sit magni, soluta odio. Natus voluptatibus eos, aliquam nisi cumque voluptas qui
        voluptatum voluptates. Atque earum inventore debitis ipsa, nulla esse, eos dignissimos placeat doloremque cum
        officia.
        Quia cum numquam consectetur sunt! Delectus quibusdam, exercitationem doloremque libero voluptatem odit?
        Perferendis natus id excepturi asperiores, veritatis officia, esse accusamus doloremque reprehenderit voluptate
        sunt alias praesentium aut labore cupiditate.
      </div>
    </div>
  </div>
</section>

<!-- footer -->
<?php
include '../includes/admin_footer.php';
?>