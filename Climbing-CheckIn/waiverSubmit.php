<?php 
    include 'connect.php';
    include 'recCust.php';
    session_start();

    $wfirstName = $_GET['wfirstName'];
    $wlastName = $_GET['wlastName'];

    $wDate = $_GET['wDate'];
    $dob = new DateTime($wDate);
    $today = new DateTime();
    $age = $dob->diff($today);
    $ageInYears = $age->format('%Y');

    $wGender = $_GET['wGender'];
    $gender = "";

    if ($wGender == 0) {
        $gender = "Male";
    }
    else if ($wGender == 1) {
        $gender = "Female";
    }
    else if ($wGender == 2) {
        $gender = "Other";
    }

    $wPicture = $_GET['wPicture'];

    $wStreet = $_GET['wStreet'];
    $wCity = $_GET['wCity'];
    $wZip = $_GET['wZip'];

    $wEmail = $_GET['wEmail'];

    $wEmName = $_GET['wEmName'];
    $wEmNumber = $_GET['wEmNumber'];


    $sql = "INSERT INTO waiver_queue (fname, lname, age, birth_date, gender, profile_picture, street_address, city_name, zip_code, email_address, contact_name, contact_number) VALUES ('$wfirstName', '$wlastName', '$ageInYears', '$wDate', '$gender', '$wPicture', '$wStreet', '$wCity', '$wZip', '$wEmail', '$wEmName', '$wEmNumber') ";

    if(mysqli_query($conn, $sql)) {
        echo "Records added successfully. \r\n";
        echo "<br>";

        echo "First Name: " . $wfirstName . "\r\n";
        echo "<br>";

        echo "Last Name: " . $wlastName . "\r\n";
        echo "<br>";

        echo "Age: " . $ageInYears . "\r\n";
        echo "<br>";

        echo "Birth Date: " . $wDate . "\r\n";
        echo "<br>";

        echo "Gender: " . $gender . "\r\n";
        echo "<br>";

        echo "Profile Picture: " . $wPicture . "\r\n";
        echo "<br>";

        echo "Street Address: " . $wStreet . "\r\n";
        echo "<br>";

        echo "City Name: " . $wCity . "\r\n";
        echo "<br>";

        echo "Zip Code: " . $wZip . "\r\n";
        echo "<br>";

        echo "Email Address: " . $wEmail . "\r\n";
        echo "<br>";

        echo "Contact Name: " . $wEmName . "\r\n";
        echo "<br>";

        echo "Contact Number: " . $wEmNumber . "\r\n";
        echo "<br>";


    } else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }
?>

<a href="waiver.php"><button id="returnSearch" class="returnButton">Return to Waiver Screen</button></a>