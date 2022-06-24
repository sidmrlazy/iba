<div class="container contact-section" id="contact">
    <h3>Contact us</h3>
    <p class="mb-5">Mention your details below for us to contact you.</p>
    <?php
    include('components/server/config.php');

    if (isset($_POST['submit'])) {
        $contact_name = $_POST['contact_name'];
        $contact_number = $_POST['contact_number'];
        $contact_email = $_POST['contact_email'];
        $contact_state = $_POST['contact_state'];
        $contact_city = $_POST['contact_city'];
        $contact_pincode = $_POST['contact_pincode'];
        $contact_address = $_POST['contact_address'];

        $query = "INSERT INTO `contact`(
            `contact_name`, 
            `contact_number`, 
            `contact_email`, 
            `contact_state`, 
            `contact_city`, 
            `contact_pincode`, 
            `contact_address`) VALUES (
                '$contact_name',
                '$contact_number',
                '$contact_email',
                '$contact_state',
                '$contact_city',
                '$contact_pincode',
                '$contact_address')";

        $result = mysqli_query($connection, $query);

        $to = "ibasthana@gmail.com";
        $subject = "ibasthana.com: Website Visitor!";
        $message = $contact_name . " " . "has contacted you on your website. His Email Address is " . $contact_email . " and his address is " . $contact_address . ", " . $contact_city . ", " . $contact_pincode;

        if ($result) {
            mail($to, $subject, $message);
            echo "<div class='alert alert-success text-center col-md-12' role='alert'>
            Form Submitted! Thank you.
          </div>";
        } else {
            die("ERROR 404!" . mysqli_error($connection));
        }
    }
    ?>
    <form method="POST" action="" class="col-md-12 contact-form">
        <div class="col-md-12 form-floating mb-3">
            <input type="text" name="contact_name" class="form-control" required id="floatingInput"
                placeholder="Full Name">
            <label for="floatingInput">Full Name</label>
        </div>
        <div class="col-md-12 form-floating mb-3">
            <input type="number" name="contact_number" required class="form-control" id="floatingNumber"
                placeholder="+91 XXXXX XXXXX">
            <label for="floatingNumber">Mobile Number</label>
        </div>

        <div class="form-floating col-md-12 mb-3">
            <input type="email" name="contact_email" class="form-control" id="floatingEmail" placeholder="abc@xyz.com">
            <label for="floatingEmail">Email</label>
        </div>

        <div class="form-floating col-md-12 mb-3">
            <input type="text" name="contact_state" class="form-control" id="floatingEmail" placeholder="abc@xyz.com">
            <label for="floatingEmail">State</label>
        </div>

        <div class="form-floating col-md-12 mb-3">
            <input type="text" name="contact_city" class="form-control" id="floatingEmail" placeholder="abc@xyz.com">
            <label for="floatingEmail">City</label>
        </div>

        <div class="form-floating col-md-12 mb-3">
            <input type="number" name="contact_pincode" required class="form-control" id="floatingEmail"
                placeholder="abc@xyz.com">
            <label for="floatingEmail">Pincode</label>
        </div>

        <div class="form-floating mb-3">
            <textarea name="contact_address" class="form-control" required placeholder="Leave a comment here"
                id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Full Address</label>
        </div>

        <button type="submit" onclick="<?php echo "<script>window.open($url)</script>"; ?>" name="submit"
            class="contact-btn">Continue</button>
    </form>




    <!-- <div class="col-md-6 d-flex justify-content-center align-items-center">
            <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_gflsxfzt.json" background="transparent"
                speed="1" class="contact-lottie" loop autoplay></lottie-player>
        </div> -->
</div>