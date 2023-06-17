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
            <a href="#" class='btn btn-info'>Update Profile</a>
        </div>

        <div class="other-details">
            <div class='row'>
                <div class='col-4 text-center'>
                    <img class="rounded" src='../images/IMG_2424.jpg' width="150" height="120" />
                </div>
                <div class='col-8'>
                    <p><b>Name:</b> Muhammad Aleem</p>
                    <p><b>Email:</b> aleemhashmi4321@gmail.com</p>
                    <p><b>Password:</b> 12345</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<?php
include '../includes/admin_footer.php';
?>