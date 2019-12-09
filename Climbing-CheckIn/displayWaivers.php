<?php 
    include 'connect.php';
    include 'recCust.php';
    session_start();

    $searchQuery = "SELECT * FROM waiver_queue";

    $resultQuery = mysqli_query($conn, $searchQuery);
?>

<h1>Waiver Queue</h1>

<div id="searchResults">

<?php
    while ($row = mysqli_fetch_assoc($resultQuery)) {
        echo '
        <a class="waiver_link" name="waiver_link" href="index.php">
            <div id="waiver" data-type="waiver_id" data-identifier="' . $row["waiver_id"] . '">
                <div class="waiver_image">
                    <img id="img" src="' . $row["profile_picture"] . '">
                </div>
                <div class="waiver_prof">
                    <h2>' . $row["fname"] . " " . $row["lname"] . '</h2>
                    <h3>DOB: ' . $row["birth_date"] . '</h3>
                </div>
            </div>
        </a>
        ';
    }
?>

</div>

<a href="index.php"><button class="returnButton">Return to Search Screen</button></a>