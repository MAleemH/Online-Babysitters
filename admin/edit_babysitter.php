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

                    $babysitter_id = $_GET['edit'];

                    $query = "SELECT * FROM babysitters WHERE babysitter_id='$babysitter_id'";

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
                        $type = $result['type'];
                    }

                }

                ?>
                <form action="../queries/update_babysitter_form.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $babysitter_id; ?>">
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
                            <textarea class="form-control" name="address" maxlength="100" id="floatingTextarea2"
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
                        <label class="form-label">Type</label>
                        <select class="form-select" name="type">
                            <option value="<?php echo $type; ?>"><?php echo $type; ?></option>
                            <?php 

                                if ($type=='Part Time') {
                                    echo "<option value='Full Time'>Full Time</option>";
                                } else {
                                    echo "<option value='Part Time'>Part Time</option>";
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