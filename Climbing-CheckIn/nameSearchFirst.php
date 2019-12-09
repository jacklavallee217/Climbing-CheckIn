<?php 
    include 'connect.php';
    include 'recCust.php';
    session_start();

    $firstSearch = mysqli_escape_string($conn, $_POST['firstSearch']);

    $searchQuery = "SELECT * FROM customers WHERE fname LIKE '%". $firstSearch ."%'";

    $resultQuery = mysqli_query($conn, $searchQuery);
?>

<h1>Search Results</h1>

<div id="searchResults">

<?php
    while ($row = mysqli_fetch_assoc($resultQuery)) {
        echo '<a class="cust_link" name="cust_link" href="customer_profile.php?' . $row["customer_id"] . '">
            <div class="cust priv'. $row["privilege"] .'">
                <div class="cust_prof">
                    <h2>' . $row["fname"] . " " . $row["lname"] . '</h2>
                    <h3>Age: ' . $row["age"] . '</h3>
                    <h3>Membership: ' . $row["membership"] . '</h3>
                    <h3>Privilege-Level: ' . $row["privilege"] . '</h3>
                    <h3>Days Left: ' . $row["days_left"] . '</h3>
                </div>
                <div class="cust_image">
                    <img id="img" src="' . $row["profile_picture"] . '">
                </div>
            </div>
        </a>';
    }
?>

</div>

<a href="index.php"><button class="returnButton">Return to Search Screen</button></a>