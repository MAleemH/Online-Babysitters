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

        <div class='overview-boxes'>
            <p class='form-heading'>Update Enrollment</p>
        </div>

        <div class="other-details">
            <div>
                <?php

                if (isset($_GET['edit'])) {

                    $user_id = $_GET['edit'];

                    $query = "SELECT * FROM users WHERE user_id='$user_id'";

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
                        $user_role = $result['user_role'];
                    }

                }

                ?>
                <form action="../queries/update_user_form.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $user_id; ?>">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="user_name" value="<?php echo $user_name; ?>" placeholder="Full Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <img class="rounded" src="../images/<?php echo $user_image; ?>" width="50" height="50">
                        <input class="form-control" type="file" name="user_image">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="user_email" placeholder="Email" value="<?php echo $user_email; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <div class="password-container">
                            <input type="password" id="password-input" class="form-control" name="user_password" placeholder="Password" value="<?php echo $user_password; ?>">
                            <span class="toggle-password" onclick="togglePasswordVisibility()">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Role</label>
                        <select class="form-select" name="user_role">
                            <option value="<?php echo $user_role; ?>"><?php echo $user_role; ?></option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <div>
                            <button type="submit" name="update" class="btn btn-outline-success w-25">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<?php
include '../includes/admin_footer.php';
?>