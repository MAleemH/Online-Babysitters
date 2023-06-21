<?php
    // Get the current page file name
    $currentPage = basename($_SERVER['PHP_SELF'], '.php');
?>
<header>
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-light bg-light">
    <a class="navbar-brand" href="index.php">
      <img src="images/logo.png" alt="Logo" width="100" height="100" />
    </a>
    <ul class="nav-group">
      <li>
        <a href="index.php" class="<?php if ($currentPage === 'index') echo 'active'; ?>">Home</a>
      </li>
      <li>
        <a href="services.php" class="<?php if ($currentPage === 'services') echo 'active'; ?>">Services</a>
      </li>
      <li>
        <a href="about.php" class="<?php if ($currentPage === 'about') echo 'active'; ?>">About</a>
      </li>
      <li>
        <a href="contact.php" class="<?php if ($currentPage === 'contact') echo 'active'; ?>">Contact</a>
      </li>
      <li>
        <a href="login.php" class="<?php if ($currentPage === 'login') echo 'active'; ?>">Login</a>
      </li>
    </ul>
  </nav>
</header>