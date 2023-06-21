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
            <p class='form-heading'>Users List</p>
        </div>

        <div class="other-details">
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Role</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $query = "SELECT * FROM users";
                        $query_conn = mysqli_query($connection, $query);

                        while ($result = mysqli_fetch_assoc($query_conn)) {
                            $user_id = $result['user_id'];
                            $user_name = $result['user_name'];
                            $user_image = $result['user_image'];
                            $user_email = $result['user_email'];
                            $user_password = $result['user_password'];
                            $user_role = $result['user_role'];

                            ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $user_id; ?>
                                </th>
                                <td>
                                    <?php echo $user_name; ?>
                                </td>
                                <td><img class="rounded" src="../images/<?php echo $user_image; ?>" width="50" height="50">
                                </td>
                                <td>
                                    <?php echo $user_email; ?>
                                </td>
                                <td>
                                    <?php echo $user_password; ?>
                                </td>
                                <td>
                                    <?php echo $user_role; ?>
                                </td>
                                <td><a onClick="javascript: return confirm('Do you want to delete this user?');" href="../queries/delete_user_btn.php?delete=<?php echo $user_id; ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                            <?php

                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<?php
include '../includes/admin_footer.php';
?>