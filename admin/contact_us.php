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
                $query = "SELECT COUNT(*) AS total_rows FROM contact";
                $result = mysqli_query($connection, $query);
                if ($result) {
                    $row = mysqli_fetch_assoc($result);
                    $rowCount = $row['total_rows'];
                    if ($rowCount >= 1) {
                        echo "<a href='add_contact.php' onClick='return false;' class='btn btn-secondary disabled'>Add New</a>";
                    } else {
                        echo "<a href='add_contact.php' class='btn btn-success'>Add New</a>";
                    }
                } else {
                    echo "Error: " . mysqli_error($connection);
                }
            ?>
        </div>

        <div class="other-details">
            <h3>Contact Us</h3>
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">Address</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $query = "SELECT * FROM contact";
                        $query_conn = mysqli_query($connection, $query);

                        while ($result = mysqli_fetch_assoc($query_conn)) {
                            $contact_id = $result['id'];
                            $email = $result['email'];
                            $contact_number = $result['contact_number'];
                            $address = $result['address'];

                            ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $contact_id; ?>
                                </th>
                                <td>
                                    <?php echo $email; ?>
                                </td>
                                <td>
                                    <?php echo $contact_number; ?>
                                </td>
                                <td>
                                    <?php echo $address; ?>
                                </td>
                                <td>
                                    <a href="edit_contact.php?edit=<?php echo $contact_id; ?>" class="btn btn-warning">Edit</a>
                                </td>
                                <td><a onClick="javascript: return confirm('Do you want to delete this details?');" href="../queries/delete_contact_btn.php?delete=<?php echo $contact_id; ?>" class="btn btn-danger">Delete</a></td>
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