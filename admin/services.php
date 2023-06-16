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
            <a href="add_service.php" class='btn btn-success'>Add Service</a>
        </div>

        <div class="other-details">
            <h3>Services</h3>
            <div>
            <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $query = "SELECT * FROM services";
                        $query_conn = mysqli_query($connection, $query);

                        while ($result = mysqli_fetch_assoc($query_conn)) {
                            $service_id = $result['service_id'];
                            $service_name = $result['name'];
                            $service_image = $result['photo'];
                            $service_description = $result['description'];

                            ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $service_id; ?>
                                </th>
                                <td>
                                    <?php echo $service_name; ?>
                                </td>
                                <td><img class="rounded" src="../images/<?php echo $service_image; ?>" width="50" height="50">
                                </td>
                                <td>
                                    <?php echo $service_description; ?>
                                </td>
                                <td>
                                    <a href="edit_service.php?edit=<?php echo $service_id; ?>" class="btn btn-warning">Edit</a>
                                </td>
                                <td><a onClick="javascript: return confirm('Do you want to delete this user?');" href="../queries/delete_service_btn.php?delete=<?php echo $service_id; ?>" class="btn btn-danger">Delete</a></td>
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