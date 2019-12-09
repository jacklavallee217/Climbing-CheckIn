<!DOCTYPE HTML>
<HTML>

  <head>
    <title>Check In Screen</title>
    <?php
      require "connect.php";
    ?>
  </head>
<body>
    <?php
      require "header.php";
    ?>

    <a href="index.php"><img id="header-logo" src="img/metrorock-logo.png"/></a>

    <h2>MetroRock Burlington</h2>
        <div id="torso">
          <div id="checkin-side">
            <h2>Check In</h2>
            <div id="search-inputs">
              <input class="inputs" name="firstName" placeholder="First Name">
              <input class="inputs" name="lastName" placeholder="Last Name">
              <button class="inputs" name="nameSearch" type="submit">Search</button>
            </div>
            <button name="onlineWaivers" type="button">Online Waivers</button>
            <div id="recCustDiv">

            <?php 
            include "recCust.php";

            session_start();

            if ($result->num_rows > 0) {

              $i = 0;
              $dup = "nope";

              while($row = mysqli_fetch_assoc($result)) {
                
                if ($i < 3) {
                  if ($dup != $row['customer_id']) {

                    $dup = $row['customer_id'];
                    $custInfo = new recCust($row['customer_id'], $row['fname'], $row['lname'], $row['profile_picture'], $row['age'], $row['membership'], $row['privilege'], $row['days_left']);
                    $_SESSION["cust_" . $row['customer_id']] = $custInfo;
                    //print_r($_SESSION);

                    echo
                    '<a class="cust_link" name="cust_link" href="customer_profile.php?' . $row["customer_id"] . '">
                      <div class="cust">
                        <div class="cust_prof">
                          <h2>' . $row["fname"] . " " . $row["lname"] . '</h2>
                          <img src="' . $row["profile_picture"] . '" width="100px" height="100px">
                        </div>
                        <h3>Age: ' . $row["age"] . '</h3>
                        <h3>Membership: ' . $row["membership"] . '</h3>
                        <h3>Privilege-Level: ' . $row["privilege"] . '</h3>
                        <h3>Days Left: ' . $row["days_left"] . '</h3>
                      </div>
                    </a>';
                    $i++;
                  }
                }
              }
            }
            //print_r($_SESSION);
            ?>

            </div>
            <div id="recCustButtons">
              <button id="prevCust" name="prevCust">&#8678;</button>
              <button id="nextCust" name="nextCust">&#8680;</button>
            </div>
          </div>
          <div id="button-side">
            <button name="purchaseButton" type="button">Purchases</button>
            <button name="editProfileButton" type="button">Edit Profile</button>
            <button name="programButton" type="button">Program</button>
          </div>
        </div>
        <div id="legs">
          <button name="systemReset" type="button">System Reset</button>
          <p id=resetAdvice><i>May take a few minutes...</i></p>
        </div>