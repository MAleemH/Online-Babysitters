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
            <p class='form-heading'>User Registration Form</p>
        </div>

        <div class="other-details">
            <div>

                <?php

                if (isset($_POST['add-user'])) {

                    $user_name = $_POST['user_name'];
                    $user_image = $_FILES['user_image']['name'];
                    $user_image_tmp = $_FILES['user_image']['tmp_name'];
                    $user_email = $_POST['user_email'];
                    $user_password = $_POST['user_password'];
                    $user_role = $_POST['user_role'];

                    move_uploaded_file($user_image_tmp, "../images/$user_image");

                    $query = "INSERT INTO users (user_name, user_image, user_email, user_password, user_role) VALUES ('$user_name', '$user_image', '$user_email', '$user_password', '$user_role')";

                    if (!$query) {
                        die("Query Failed!");
                    }

                    $result = mysqli_query($connection, $query);

                    if ($result) {
                        echo "<div class='alert alert-success'>User Added Successfully!</div>";
                    } else {
                        die("Query Connection Failed! " . mysqli_error($connection));
                    }

                }

                ?>

                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="user_name" placeholder="Full Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input class="form-control" type="file" name="user_image">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="user_email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="user_password" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Role</label>
                        <select class="form-select" name="user_role">
                            <option value="Admin">Admin</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <div>
                            <button type="submit" name="add-user" class="btn btn-outline-success w-25">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- navbar -->
<?php
include '../includes/admin_footer.php';
?>