<div class="container contact-section" id="contact">
    <h3>Contact us</h3>
    <p class="mb-5">Mention your details below for us to contact you.</p>
    <?php
    include('components/server/config.php');
    if (isset($_POST['submit'])) {
        $user_name = $_POST['user_name'];
        $user_contact = $_POST['user_contact'];
        $user_contact_whatsapp = $_POST['user_contact_whatsapp'];
        $user_property_type = $_POST['user_property_type'];
        $user_floor_offered = $_POST['user_floor_offered'];
        $user_property_area = $_POST['user_property_area'];
        $user_property_frontage = $_POST['user_property_frontage'];
        $user_property_landmark = $_POST['user_property_landmark'];
        $user_state = $_POST['user_state'];
        $user_city = $_POST['user_city'];
        $user_pincode = $_POST['user_pincode'];


        $query = "INSERT INTO `user_form`(
            `user_name`, 
            `user_contact`, 
            `user_contact_whatsapp`, 
            `user_property_type`, 
            `user_floor_offered`, 
            `user_property_area`, 
            `user_property_frontage`, 
            `user_property_landmark`, 
            `user_state`, 
            `user_city`, 
            `user_pincode`) VALUES (
                '$user_name',
                '$user_contact',
                '$user_contact_whatsapp',
                '$user_property_type',
                '$user_floor_offered',
                '$user_property_area',
                '$user_property_frontage',
                '$user_property_landmark',
                '$user_state',
                '$user_city',
                '$user_pincode')";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("<div class='alert alert-danger' role='alert'>
            Error! There was some problem in submitting this form.
          </div>" . mysqli_error($connection));
        } else {
            $to = 'sid.asthana0290@gmail.com';
            $subject = 'Website Form Filled';
            $message = $user_name . "with contact " . $user_contact . "has contacted you from your website";
            $from = 'ibasthana@ibasthana.com';

            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            $headers .= 'From: ' . $from . "\r\n" .
                'Reply-To: ' . $from . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            $message = '<html><body>';
            $message .= '<h1 style="color:#f40;">Hello I. B. Asthana</h1>';
            $message .= "<p style='color:#000;font-size:18px;'>Name: '$user_name', <br></p>";
            $message .= "<p style='color:#000;font-size:18px;'>Contact: '$user_contact', <br></p>";
            $message .= "<p style='color:#000;font-size:18px;'>Available on Whatsapp: '$user_contact_whatsapp', <br></p>";
            $message .= "<p style='color:#000;font-size:18px;'>Property Type: '$user_property_type', <br></p>";
            $message .= "<p style='color:#000;font-size:18px;'>Floor Offered: '$user_floor_offered', <br></p>";
            $message .= "<p style='color:#000;font-size:18px;'>Property Area: '$user_property_area' SqFt, <br></p>";
            $message .= "<p style='color:#000;font-size:18px;'>Frontage: '$user_property_frontage' Ft, <br></p>";
            $message .= "<p style='color:#000;font-size:18px;'>Landmark: '$user_property_landmark' Ft, <br></p>";
            $message .= "<p style='color:#000;font-size:18px;'>State: '$user_state' Ft, <br></p>";
            $message .= "<p style='color:#000;font-size:18px;'>City: '$user_city' Ft, <br></p>";
            $message .= "<p style='color:#000;font-size:18px;'>Pincode: '$user_pincode' Ft, <br></p>";
            $message .= '</body></html>';

            // Sending email
            if (mail($to, $subject, $message, $headers)) {
                echo "<div class='alert alert-success' role='alert'>Thank you for your interest. Someone from our team will contact you shortly</div>";
            }
        }
    }

    ?>
    <form method="POST" action="" class="col-md-12 contact-form">
        <div class="col-md-12 form-floating mb-3">
            <input type="text" name="user_name" class="form-control" required id="floatingInput"
                placeholder="Full Name">
            <label for="floatingInput">Name of Owner</label>
        </div>
        <div class="col-md-12 form-floating mb-3">
            <input type="number" name="user_contact" required class="form-control" id="floatingNumber"
                placeholder="+91 XXXXX XXXXX">
            <label for="floatingNumber">Contact Number</label>
        </div>


        <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" name="user_contact_whatsapp" required
                aria-label="Floating label select example">
                <option>Open this select menu</option>
                <option name="user_contact_whatsapp" value="Yes">Yes</option>
                <option name="user_contact_whatsapp" value="No">No</option>
            </select>
            <label for="floatingSelect">Is this number available for Whatsapp?</label>
        </div>

        <div class="form-floating mb-3">
            <select class="form-select" name="user_property_type" required id="floatingSelect"
                aria-label="Floating label select example">
                <option selected>Click here for options</option>
                <option value="Commercial">Commercial</option>
                <option value="Residential">Residential</option>
                <option value="Mixed">Mixed</option>
            </select>
            <label for="floatingSelect">Property Type</label>
        </div>

        <div class="form-floating col-md-12 mb-3">
            <input type="text" name="user_floor_offered" class="form-control" id="floatingArea" required
                placeholder="Floor Offered">
            <label for="floatingArea">Floor offered</label>
        </div>


        <div class="form-floating col-md-12 mb-3">
            <input type="number" name="user_property_area" class="form-control" id="floatingArea" required
                placeholder="in SqFt">
            <label for="floatingArea">Total Area of the property (in SqFt)</label>
        </div>

        <div class="form-floating col-md-12 mb-3">
            <input type="number" name="user_property_frontage" class="form-control" required id="floatingFrontage"
                placeholder="in Feet">
            <label for="floatingFrontage">Frontage (in Feet)</label>
        </div>

        <div class="form-floating col-md-12 mb-3">
            <input type="text" name="user_property_landmark" class="form-control" id="floatingLandmark"
                placeholder="Landmark">
            <label for="floatingLandmark">Landmark</label>
        </div>

        <div class="form-floating mb-3">
            <select class="form-select" required name="user_state" id="floatingSelect"
                aria-label="Floating label select example">
                <option>Click here to open list of States</option>
                <?php
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://api.countrystatecity.in/v1/countries/IN/states',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_HTTPHEADER => array(
                        'X-CSCAPI-KEY: eTAxUGIyaElOSm5ldE9YdDhmQTJTaWMxbEVWUVFqR1hqblZRNmRyVw=='
                    ),
                ));
                $response = curl_exec($curl);
                curl_close($curl);
                $response_json = json_decode($response);
                foreach ($response_json as $key) {
                    $user_state =  $key->name; ?>
                <option value="<?php echo $user_state; ?>"><?php echo $user_state; ?></option>
                <?php
                }
                ?>

            </select>
            <label for="floatingSelect">State</label>
        </div>

        <div class="form-floating mb-3">
            <select class="form-select" required name="user_city" id="floatingSelect"
                aria-label="Floating label select example">
                <option>Click here to open list of Cities</option>
                <?php
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://api.countrystatecity.in/v1/countries/IN/cities',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_HTTPHEADER => array(
                        'X-CSCAPI-KEY: eTAxUGIyaElOSm5ldE9YdDhmQTJTaWMxbEVWUVFqR1hqblZRNmRyVw=='
                    ),
                ));
                $response = curl_exec($curl);
                curl_close($curl);
                $response_json = json_decode($response);
                foreach ($response_json as $key) {
                    $user_city =  $key->name; ?>

                <option value="<?php echo $user_city; ?>"><?php echo $user_city; ?></option>
                <?php
                }
                ?>
            </select>
            <label for="floatingSelect">City</label>
        </div>

        <div class="form-floating col-md-12 mb-3">
            <input type="number" name="user_pincode" required class="form-control" id="floatingEmail"
                placeholder="6 Digit Pincode">
            <label for="floatingEmail">Pincode</label>
        </div>

        <button type="submit" name="submit" class="contact-btn">Submit</button>
    </form>
</div>