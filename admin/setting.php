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

    <?php

    if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    $query = "SELECT * FROM users WHERE user_id = '$user_id'";

    if (!$query) {
        die("Query Failed!");
    }

    $query_conn = mysqli_query($connection, $query);

    if (!$query_conn) {
        die("Query Connection Failed! " . mysqli_error($connection));   
    }

    while ($result = mysqli_fetch_assoc($query_conn)) {
        $user_name = $result['user_name'];
        $user_image = $result['user_image'];
        $user_email = $result['user_email'];
        $user_password = $result['user_password'];
    }

    }

    ?>

    <div class="home-content">

        <div class='overview'>
            <a href="add_user.php" class='btn btn-success'>Add User</a>
            <a href="view_users.php" class='btn btn-warning'>View Users</a>
            <a href="edit_profile.php?edit=<?php echo $user_id; ?>" class='btn btn-info'>Update Profile</a>
        </div>

        <div class="other-details">
            <div class='row'>
                <div class='col-4 text-center'>
                    <img class="rounded" src='../images/<?php echo $user_image; ?>' width="150" height="120" />
                </div>
                <div class='col-8'>
                    <p><b>Name:</b> <?php echo $user_name; ?></p>
                    <p><b>Email:</b> <?php echo $user_email; ?></p>
                    <p><b>Password:</b> <?php echo $user_password; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<?php
include '../includes/admin_footer.php';
?>