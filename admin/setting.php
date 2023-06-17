<!-- head and sidebar -->
<?php

include '../includes/admin_head.php';
include '../includes/admin_sidebar.php';
?>

<section class="home-section">
    <!-- navbar -->
    <?php
    include '../includes/admin_navbar.php';
    ?>

    <div class="home-content">

        <div class='overview'>
            <a href="add_user.php" class='btn btn-success'>Add User</a>
            <a href="view_users.php" class='btn btn-warning'>View Users</a>
        </div>

        <div class="other-details">
            <div class='d-flex justify-content-around'>
                <div>
                    Image of logged in user here
                </div>
                <div>
                    Other data here
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<?php
include '../includes/admin_footer.php';
?>