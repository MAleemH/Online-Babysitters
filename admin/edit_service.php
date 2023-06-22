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
            <p class='form-heading'>Update Service</p>
        </div>

        <div class="other-details">
            <div>
                <?php

                if (isset($_GET['edit'])) {

                    $service_id = $_GET['edit'];

                    $query = "SELECT * FROM services WHERE service_id='$service_id'";

                    if (!$query) {
                        die("Query Failed!");
                    }

                    $query_conn = mysqli_query($connection, $query);

                    if (!$query_conn) {
                        die("Query Connection Failed! " . mysqli_error($connection));
                    }

                    while ($result = mysqli_fetch_assoc($query_conn)) {
                        $service_name = $result['name'];
                        $service_image = $result['photo'];
                        $service_description = $result['description'];
                    }

                }

                ?>
                <form action="../queries/update_service_form.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $service_id; ?>">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $service_name; ?>" placeholder="Full Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <img class="rounded" src="../images/<?php echo $service_image; ?>" width="50" height="50">
                        <input class="form-control" type="file" name="image">
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" name="description" maxlength="300" id="floatingTextarea2"
                                style="height: 100px"><?php echo $service_description; ?></textarea>
                            <label for="floatingTextarea2">Description</label>
                        </div>
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