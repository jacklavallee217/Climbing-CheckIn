<?php 
    include 'connect.php';
    include 'recCust.php';
    session_start();

    $membership = $_GET['membership'];
    $membership_type = '';

    switch($membership) {
        case 0:
            $membership_type = 'None';
            break;
        case 1:
            $membership_type = 'Mone';
            break;
        case 2:
            $membership_type = 'Day Pass';
            break;
        case 3:
            $membership_type = 'Single Month';
            break;
        case 4:
            $membership_type = 'Monthly';
            break;
        case 5:
            $membership_type = 'Semester';
            break;
        case 6:
            $membership_type = 'Annual';
            break;
        case 7:
            $membership_type = 'Banned';
            break;
        case 8:
            $membership_type = 'Staff';
            break;
        case 9:
            $membership_type = 'Lifetime';
            break;
    }

    $privilege = $_GET['privilege'];
    $privilege_type = '';

    switch($privilege) {
        case 0:
            $privilege_type = 'None';
            break;
        case 1:
            $privilege_type = 'None';
            break;
        case 2:
            $privilege_type = 'Bouldering';
            break;
        case 3:
            $privilege_type = 'Toproping';
            break;
        case 4:
            $privilege_type = 'Lead';
            break;
    }

    $notes = $_GET['notes'];

    $current_id = $_GET['current_id'];

    $sql = "UPDATE customers SET membership = '$membership_type', privilege = '$privilege_type', notes = '$notes' WHERE customer_id = $current_id";

    if(mysqli_query($conn, $sql)) {
        //echo "Records added successfully. \r\n";
        echo "<script> location.href='customer_profile.php?" . $current_id . "' </script>";
    }
    else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }