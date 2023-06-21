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
            <?php
                $query = "SELECT COUNT(*) AS total_rows FROM about";
                $result = mysqli_query($connection, $query);
                if ($result) {
                    $row = mysqli_fetch_assoc($result);
                    $rowCount = $row['total_rows'];
                    if ($rowCount >= 2) {
                        echo "<a href='add_about.php' onClick='return false;' class='btn btn-secondary disabled'>Add New</a>";
                    } else {
                        echo "<a href='add_about.php' class='btn btn-success'>Add New</a>";
                    }
                } else {
                    echo "Error: " . mysqli_error($connection);
                }
            ?>
        </div>

        <div class="other-details">
            <div>
                <div class="row">
                    <?php

                    $query = "SELECT * FROM about";
                    $query_conn = mysqli_query($connection, $query);

                    while ($result = mysqli_fetch_assoc($query_conn)) {
                        $about_id = $result['id'];
                        $title = $result['title'];
                        $description = $result['description'];

                        ?>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $title; ?>
                                    </h5>
                                    <p class="card-text">
                                        <?php echo $description; ?>
                                    </p>
                                    <a href="edit_about.php?edit=<?php echo $about_id; ?>" class="btn btn-warning">Edit</a>
                                    <a onClick="javascript: return confirm('Do you want to delete this details?');"
                                        href="../queries/delete_about_btn.php?delete=<?php echo $about_id; ?>"
                                        class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                        <?php

                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<?php
include '../includes/admin_footer.php';
?>