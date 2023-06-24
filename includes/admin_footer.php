<footer>
  <!-- place footer here -->
</footer>

<script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");

    sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");

        if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else
            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }

    // Get the current URL
    var currentUrl = window.location.href;

    // Get all the links in the sidebar
    var links = document.querySelectorAll('.sidebar .nav-links a');

    // Iterate over each link and check if its href matches the current URL
    links.forEach(function (link) {
        if (link.href === currentUrl) {
            link.classList.add('active');
        }
    });
</script>
<!-- password toggle -->
<script>
  function togglePasswordVisibility() {
    var passwordInput = document.getElementById('password-input');
    var toggleIcon = document.querySelector('.toggle-password i');

    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      toggleIcon.classList.remove('fa-eye');
      toggleIcon.classList.add('fa-eye-slash');
    } else {
      passwordInput.type = 'password';
      toggleIcon.classList.remove('fa-eye-slash');
      toggleIcon.classList.add('fa-eye');
    }
  }
</script>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
  integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>