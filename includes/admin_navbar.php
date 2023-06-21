<nav>
  <div class="sidebar-button">
    <i class='bx bx-menu sidebarBtn'></i>

    <?php
      $current_page = basename($_SERVER['PHP_SELF']);

      if ($current_page == 'index.php') {

        echo "<span class='dashboard'>Dashboard</span>";

      } elseif ($current_page == 'services.php') {

        echo "<span class='dashboard'>Services</span>";

      } elseif ($current_page == 'enrollments.php') {

        echo "<span class='dashboard'>Enrollments</span>";

      } elseif ($current_page == 'babysitters.php') {

        echo "<span class='dashboard'>Babysitters</span>";

      } elseif ($current_page == 'messages.php') {

        echo "<span class='dashboard'>Messages</span>";

      } elseif ($current_page == 'about_us.php') {

        echo "<span class='dashboard'>About Us</span>";

      } elseif ($current_page == 'contact_us.php') {

        echo "<span class='dashboard'>Contact Us</span>";

      } elseif ($current_page == 'setting.php') {

        echo "<span class='dashboard'>Profile</span>";

      }
    ?>

  </div>
  <div class="profile-details">
    <img src="../images/user-icon.jpg" alt="Admin-Image">
    <span class="admin_name">Muhammad Naseem</span>
  </div>
</nav>