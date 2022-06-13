<div class="container contact-section" id="contact">
    <h3>Contact us</h3>
    <p>Mention your details below for us to contact you.</p>
    <?php
    include('components/server/config.php');
    if (isset($_POST['submit'])) {
        $contact_name = $_POST['contact_name'];
        $contact_number = $_POST['contact_number'];
        $contact_email = $_POST['contact_email'];
        $contact_service = $_POST['contact_service'];

        if ($contact_number != null || $contact_name != null || $contact_service != null) {
            $query = "INSERT INTO `contact`(
                contact_name,
                contact_number,
                contact_email,
                contact_service
            ) VALUES(
                '$contact_name',
                '$contact_number',
                '$contact_email',
                '$contact_service'
            )";
            $result = mysqli_query($connection, $query);

            if (!$result) {
                die("SERVER ERROR: ERROR CODE 404!" . mysqli_error($connection));
            } else {
                // $whatsapp_number = "+919727545445";
                // $whatsapp_msg = "Hi,%$contact_name%20having%20mobile%20number%20$contact_number%20has%20contact%20you%20for%20$contact_service%20from%20yout%20website";
                // $whatsapp_link = "https://wa.me/$whatsapp_number?text=$whatsapp_msg";

                // $to = "sid.asthana0290@gmail.com";
                // $subject = "ibasthana.com : Website Visitor!";
                // $txt = "A new form has been filled from the website" . "\r\n" . "Visitor Name: " . $contact_name . "\r\n" . "Visitor Contact Number: " . $contact_number . "\r\n" . "Seeking to " . $contact_service;

                // mail($to, $subject, $txt);

                echo "<div class='alert alert-success' role='alert'>Form Submitted. We will connect with you soon!</div>";
            }
        } else {
            echo "<div class='alert alert-danger' role='alert'>
            Looks like you've missed out a field!
          </div>";
        }
    }

    ?>
    <div class="inner-row">

        <form method="POST" class="col-md-6 contact-form">
            <div class="form-floating mb-3">
                <input type="text" name="contact_name" class="form-control" id="floatingInput" placeholder="Full Name">
                <label for="floatingInput">Full Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" name="contact_number" class="form-control" id="floatingNumber"
                    placeholder="+91 XXXXX XXXXX">
                <label for="floatingNumber">Mobile Number</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" name="contact_email" class="form-control" id="floatingEmail"
                    placeholder="abc@xyz.com">
                <label for="floatingEmail">Email</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" name="contact_service" id="floatingSelect"
                    aria-label="Floating label select example">
                    <option selected>Open this select menu</option>
                    <option name="contact_service" value="Sell">Sell</option>
                    <option name="contact_service" value="Lease">Lease</option>
                    <option name="contact_service" value="Invest">Invest</option>
                </select>
                <label for="floatingSelect">Works with selects</label>
            </div>
            <button type="submit" name="submit" class="contact-btn">Submit</button>
        </form>

        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_gflsxfzt.json" background="transparent"
                speed="1" class="contact-lottie" loop autoplay></lottie-player>
        </div>
    </div>
</div>