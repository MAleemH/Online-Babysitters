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

                    $enrollment_id = $_GET['edit'];

                    $query = "SELECT * FROM enrollments WHERE enrollment_id='$enrollment_id'";

                    if (!$query) {
                        die("Query Failed!");
                    }

                    $query_conn = mysqli_query($connection, $query);

                    if (!$query_conn) {
                        die("Query Connection Failed! " . mysqli_error($connection));
                    }

                    while ($result = mysqli_fetch_assoc($query_conn)) {
                        $name = $result['name'];
                        $image = $result['photo'];
                        $address = $result['address'];
                        $contact = $result['contact_number'];
                        $emergency_contact = $result['emergency_contact_number'];
                        $status = $result['status'];
                    }

                }

                ?>
                <form action="../queries/update_enrollment_form.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $enrollment_id; ?>">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" placeholder="Full Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <img class="rounded" src="../images/<?php echo $image; ?>" width="50" height="50">
                        <input class="form-control" type="file" name="image">
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" name="address" id="floatingTextarea2"
                                style="height: 100px"><?php echo $address; ?></textarea>
                            <label for="floatingTextarea2">Address</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contact Number</label>
                        <input type="text" class="form-control" name="contact_number"  value="<?php echo $contact; ?>" placeholder="+923445387545">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Emergency Contact Number</label>
                        <input type="text" class="form-control" name="emergency_contact_number"  value="<?php echo $emergency_contact; ?>" placeholder="+923445387605">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select" name="status">
                            <option value="<?php echo $status; ?>"><?php echo $status; ?></option>
                            <?php 

                                if ($status=='Pending') {
                                    echo "<option value='Accepted'>Accepted</option>";
                                    echo "<option value='Rejected'>Rejected</option>";
                                    echo "<option value='Hold'>Hold</option>";
                                } elseif ($status=='Accepted') {
                                    echo "<option value='Rejected'>Rejected</option>";
                                    echo "<option value='Hold'>Hold</option>";
                                } elseif ($status=='Rejected') {
                                    echo "<option value='Accepted'>Accepted</option>";
                                    echo "<option value='Hold'>Hold</option>";
                                } else {
                                    echo "<option value='Accepted'>Accepted</option>";
                                    echo "<option value='Rejected'>Rejected</option>";
                                }
                            
                            ?>
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