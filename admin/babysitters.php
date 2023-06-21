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
            <a href="add_babysitter.php" class='btn btn-success'>Add Babysitter</a>
        </div>

        <div class="other-details">
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Address</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Emergency Contact</th>
                            <th scope="col">Type</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $query = "SELECT * FROM babysitters";
                        $query_conn = mysqli_query($connection, $query);

                        while ($result = mysqli_fetch_assoc($query_conn)) {
                            $babysitter_id = $result['babysitter_id'];
                            $name = $result['name'];
                            $image = $result['photo'];
                            $address = $result['address'];
                            $contact = $result['contact_number'];
                            $emergency_contact = $result['emergency_contact_number'];
                            $type = $result['type'];

                            ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $babysitter_id; ?>
                                </th>
                                <td>
                                    <?php echo $name; ?>
                                </td>
                                <td><img class="rounded" src="../images/<?php echo $image; ?>" width="50" height="50">
                                </td>
                                <td>
                                    <?php echo $address; ?>
                                </td>
                                <td>
                                    <?php echo $contact; ?>
                                </td>
                                <td>
                                    <?php echo $emergency_contact; ?>
                                </td>
                                <td>
                                    <?php echo $type; ?>
                                </td>
                                <td>
                                    <a href="edit_babysitter.php?edit=<?php echo $babysitter_id; ?>" class="btn btn-warning">Edit</a>
                                </td>
                                <td><a onClick="javascript: return confirm('Do you want to delete this babysitter?');" href="../queries/delete_babysitter_btn.php?delete=<?php echo $babysitter_id; ?>" class="btn btn-danger">Delete</a></td>
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