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

                    $about_id = $_GET['edit'];

                    $query = "SELECT * FROM about WHERE id='$about_id'";

                    if (!$query) {
                        die("Query Failed!");
                    }

                    $query_conn = mysqli_query($connection, $query);

                    if (!$query_conn) {
                        die("Query Connection Failed! " . mysqli_error($connection));
                    }

                    while ($result = mysqli_fetch_assoc($query_conn)) {
                        $title = $result['title'];
                        $description = $result['description'];
                    }

                }

                ?>
                <form action="../queries/update_about_form.php" method="POST">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $about_id; ?>">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="<?php echo $title; ?>" placeholder="Title">
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" name="description" maxlength="700" id="floatingTextarea2"
                                style="height: 250px"><?php echo $description; ?></textarea>
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