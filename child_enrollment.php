<!-- head and header -->
<?php

include './includes/head.php';
include './includes/header.php';

?>

<main>
    <!-- Child Enrollment -->
    <section id="enrollment">
        <div class="container-fluid">
            <!-- enrollment title -->
            <div class="row m-3">
                <div class="col-12 text-uppercase text-center text-white">
                    <h2>Enroll Your Child</h2>
                </div>
            </div>
            <!-- enrollment form -->
            <div class="row">
                <form action="queries/add_enrollment_form.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-5">
                        <label class="form-label text-white fw-bold">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                    </div>
                    <div class="mb-5">
                        <label class="form-label text-white fw-bold">Image</label>
                        <input class="form-control" type="file" name="image" required>
                    </div>
                    <div class="mb-5">
                        <div class="form-floating">
                            <textarea class="form-control" name="address" id="floatingTextarea2"
                                style="height: 100px" required></textarea>
                            <label for="floatingTextarea2">Address</label>
                        </div>
                    </div>
                    <div class="mb-5">
                        <label class="form-label text-white fw-bold">Contact Number</label>
                        <input type="text" class="form-control" name="contact_number" placeholder="+923445387545" required>
                    </div>
                    <div class="mb-5">
                        <label class="form-label text-white fw-bold">Emergency Contact Number</label>
                        <input type="text" class="form-control" name="emergency_contact_number" placeholder="+923445387605" required>
                    </div>
                    <input type="hidden" name="return_url" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
                    <div class="mt-5">
                        <div class='text-center'>
                            <button type="submit" name="add" class="btn btn-success w-25">ENROLL NOW</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<!-- footer -->
<?php include './includes/footer.php'; ?>