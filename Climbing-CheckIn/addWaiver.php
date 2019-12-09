<?php 
    include 'connect.php';
    include 'recCust.php';
    session_start();

    $waiver_id = mysqli_escape_string($conn, $_POST['waiver_id']);

    $sql = "INSERT INTO customers (fname, lname, age, birth_date, profile_picture, gender, street_address, city_name, zip_code, email_address, contact_name, contact_number) SELECT fname, lname, age, birth_date, profile_picture, gender, street_address, city_name, zip_code, email_address, contact_name, contact_number FROM waiver_queue WHERE waiver_id = $waiver_id ";

    if(mysqli_query($conn, $sql)) {
        echo "Records added successfully. \r\n";
    } else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }

    $del = "DELETE FROM waiver_queue WHERE (waiver_id = '" . $waiver_id . "') ";

    if(mysqli_query($conn, $del)) {
        echo "Records deleted successfully. \r\n";
    } else {
        echo "ERROR: Could not execute $del. " . mysqli_error($conn);
    }    
    ?>