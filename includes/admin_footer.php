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
</body>

</html>