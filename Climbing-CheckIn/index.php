<!DOCTYPE HTML>
<HTML>

    <head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <title>Check In Screen</title>
    <?php
        require "connect.php";
    ?>
    </head>
<body>
    <?php
        //require "header.php";
    ?>

    <div id="search">

        <div id="torso">

            <div id="checkin-side">

                <h1>MetroRock Burlington</h1>
                <img id="header-logo" src="img/metrorock-logo.png"/>
                <h2>Search Customer</h2>

                <div id="search-inputs">
                    <input class="inputs" id="firstSearch" name="firstSearch" placeholder="First Name">
                    <input class="inputs" id="lastSearch" name="lastSearch" placeholder="Last Name">
                    <button class="inputs" id="nameSearch" name="nameSearch" type="submit">Search</button>
                </div>
                <button id="onlineWaivers" name="onlineWaivers" type="button">Online Waivers</button>
                <button id="purchaseButton" name="purchaseButton" type="button">Anonymous Purchase</button>
            </div>

            <div id="customer-side">

            <h2 id="recCustTitle">Recent Customers</h2>

                <div id="recCustDiv">

                    <?php 
                    //include "recCust.php";

                    session_start();

                    if ($result->num_rows > 0) {

                        $i = 0;
                        $dup = "nope";

                        while($row = mysqli_fetch_assoc($result)) {
                        
                            if ($i < 15) {
                                if ($dup != $row['customer_id']) {
                                    if ($row['admitted'] == 1) {

                                        $dup = $row['customer_id'];
                                        //$custInfo = new recCust($row['customer_id'], $row['fname'], $row['lname'], $row['profile_picture'], $row['age'], $row['membership'], $row['privilege'], $row['days_left']);
                                        //$_SESSION["cust_" . $row['customer_id']] = $custInfo;

                                        echo
                                        '<a class="cust_link" name="cust_link" href="customer_profile.php?' . $row["customer_id"] . '">
                                            <div class="cust priv'. $row["privilege"] .'">
                                                <div class="cust_prof">
                                                    <h2>' . $row["fname"] . " " . $row["lname"] . '</h2>
                                                    <h3>Age:   ' . $row["age"] . '</h3>
                                                    <h3>Membership:   ' . $row["membership"] . '</h3>
                                                    <h3>Privilege-Level:   ' . $row["privilege"] . '</h3>
                                                </div>
                                                <div class="cust_image">
                                                    <img id="img" src="' . $row["profile_picture"] . '">
                                                </div>
                                            </div>
                                        </a>';
                                        $i++;
                                    }
                                }
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
  </body>
  <script src="js/jQuery.js" type="text/javascript"></script>
  <script src="js/app.js"></script>
</HTMl>

