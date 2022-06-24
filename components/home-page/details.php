<?php
include('components/server/config.php');
$contact_number = $_POST['contact_number'];

if (isset($_POST['submit'])) {
    $contact_name = $_POST['contact_name'];
    $contact_number = $_POST['contact_number'];
    $contact_email = $_POST['contact_email'];
    $contact_service = $_POST['contact_service'];
    $property_name = $_POST['property_name'];
    $property_total_area = $_POST['property_total_area'];
    $property_frontage = $_POST['property_frontage'];
    $property_floors = $_POST['property_floors'];
    $property_offered_floor = $_POST['property_offered_floor'];
    $property_owner_name = $_POST['property_owner_name'];
    $property_asking_rate = $_POST['property_asking_rate'];


    $insert_details_query = "INSERT INTO `property_details`(
            contact_name,
            contact_number,
            contact_email,
            contact_service,
            property_contact_id,
            property_name,
            property_total_area,
            property_frontage,
            property_floors,
            property_offered_floor,
            property_owner_name,
            property_asking_rate
            ) VALUES (
            $contact_id,
            $property_name,
            $property_total_area,
            $property_frontage,
            $property_floors,
            $property_offered_floor,
            $property_owner_name,
            $property_asking_rate,
            $contact_name,
            $contact_number,
            $contact_email,
            $contact_service
            )";
    $insert_details_result = mysqli_query($connection, $insert_details_query);

    if ($insert_details_query) {
        echo "Success";
    } else {
        echo "Fail";
    }
} ?>

<div class="container mb-5 mt-5 details">
    <h3>DETAILS</h3>
    <p>Please provide us with few details</p>



    <form method="POST" action="" class="col-md-12 contact-form">
        <div class="d-flex mb-3">
            <div class="col-md-12 m-1 form-floating ">
                <input type="text" name="" class="form-control" id="floatingInput" placeholder="Property Name">
                <label for="floatingInput">Name of the Owner of the property?</label>
            </div>
        </div>
        <div class="d-flex mb-3">
            <div class="col-md-12 m-1 form-floating ">
                <input type="text" name="property_name" class="form-control" id="floatingInput"
                    placeholder="Property Name">
                <label for="floatingInput">Name of Property (if any)</label>
            </div>

        </div>
        <div class="d-flex mb-3">
            <div class="col-md-6 m-1 form-floating ">
                <input type="text" name="property_frontage" class="form-control" id="floatingInput"
                    placeholder="Full Name">
                <label for="floatingInput">Property Frontage (in SqFt)</label>
            </div>
            <div class="col-md-6 m-1 form-floating ">
                <input type="number" name="property_total_area" class="form-control" id="floatingNumber"
                    placeholder="Area in Sqft">
                <label for="floatingNumber">Total area of the property being offered (in SqFt)</label>
            </div>
        </div>

        <div class="d-flex mb-3">
            <div class="col-md-6 m-1 form-floating">
                <select class="form-select" name="property_floors" id="floatingSelect"
                    aria-label="Floating label select example">
                    <option selected>------------------</option>
                    <option name="property_floors" value="1">1</option>
                    <option name="property_floors" value="2">2</option>
                    <option name="property_floors" value="3">3</option>
                    <option name="property_floors" value="4">4</option>
                    <option name="property_floors" value="5">5</option>
                    <option name="property_floors" value="6">6</option>
                    <option name="property_floors" value="7">7</option>
                    <option name="property_floors" value="8">8</option>
                    <option name="property_floors" value="9">9</option>
                    <option name="property_floors" value="10">10</option>
                    <option name="property_floors" value="10+">10+</option>
                </select>
                <label for="floatingSelect">How many floors are there in the property?</label>
            </div>
            <div class="col-md-6 m-1 form-floating">
                <select class="form-select" name="property_offered_floor" id="floatingSelect"
                    aria-label="Floating label select example">
                    <option selected>------------------</option>
                    <option name="property_offered_floor" value="All the floors">All the floors</option>
                    <option name="property_offered_floor" value="Lower Ground Floor">Lower Ground Floor</option>
                    <option name="property_offered_floor" value="Upper Ground Floor">Upper Ground Floor</option>
                    <option name="property_offered_floor" value="Ground Floor">Ground Floor</option>
                    <option name="property_offered_floor" value="Other">Other</option>
                </select>
                <label for="floatingSelect">Which floor are you offering?</label>
            </div>
        </div>
        <button type="submit" name="submit" class="contact-btn">Submit</button>
    </form>
</div>