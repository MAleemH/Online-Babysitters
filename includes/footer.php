<div class="container-fluid m-0 bg-light">
  <footer class="pt-5">
    <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <h5>Services</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="services.php" class="nav-link p-0 text-muted">Babysitting Services</a></li>
          <li class="nav-item mb-2"><a href="services.php" class="nav-link p-0 text-muted">Childcare Options</a></li>
          <li class="nav-item mb-2"><a href="services.php" class="nav-link p-0 text-muted">Types of Babysitters</a></li>
          <li class="nav-item mb-2"><a href="services.php" class="nav-link p-0 text-muted">Specialized Care</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>About Us</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-muted">Our Story</a></li>
          <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-muted">Mission and Values</a></li>
          <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-muted">Meet the Team</a></li>
          <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-muted">Why Choose Us</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>Contact Us</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 text-muted">Get in Touch</a></li>
          <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 text-muted">Contact Information</a></li>
          <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 text-muted">Request a Babysitter</a></li>
          <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 text-muted">Customer Support</a></li>
        </ul>
      </div>

      <div class="col-md-5 offset-md-1 mb-3">
        <!-- Display error message if it exists -->
        <?php if(isset($_GET['sub_error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['sub_error']; ?>
            </div>
        <?php } ?>
        <!-- getting url -->
        <?php
          $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        ?>
        <!-- subscription form -->
        <form action='queries/subscribe_form.php' method='POST'>
          <h5>Subscribe to our website</h5>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" name="email" class="form-control" placeholder="Email address" required>
            <input type="hidden" name="return_url" value="<?php echo $actual_link; ?>">
            <button class="btn btn-primary" name="submit" type="submit">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 border-top">
      <p>&copy; 2023 Company, Inc. All rights reserved.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
              <use xlink:href="#twitter" />
            </svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
              <use xlink:href="#instagram" />
            </svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
              <use xlink:href="#facebook" />
            </svg></a></li>
      </ul>
    </div>
  </footer>
</div>
<!-- Custom JavaScript -->
<script src="javascript/index.js"></script>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
  integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>