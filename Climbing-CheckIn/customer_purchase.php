<!DOCTYPE HTML>
<HTML>

    <head>

        <link href="css/main.css" rel="stylesheet"/>
        <link href="css/customer_purchase.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

        <?php
        require 'connect.php';
        //include "recCust.php";
        session_start();

        if ($result->num_rows > 0) {
            $i = 0;
            $dup = "nope";
            while($row = mysqli_fetch_assoc($result)) {
                if ($dup != $row['customer_id']) {
                    if ($row['customer_id'] == $_SERVER['QUERY_STRING']) {

                        $dup = $row['customer_id'];

                        echo '<title>Purchase: ' . $row['fname'] . ' ' . $row['lname'] . '</title>';

                        echo '</head>';
                        echo '<body>';

                        //require "header.php";

                        echo "<h1 id='profileHeader'>Customer Purchase</h1>";

                        echo "<div id='container'><div id='infoside'>";

                            echo 
                                "<h1>" . $row['fname'] . ' ' . $row['lname'] . "</h1>
                                <h1>Age: " . $row['age'] . "</h1>
                                <a class='enter_card' name='enter_card' href='enter_card.php?" . $row['customer_id'] . "'><button id='cardonfile'>Enter / Edit Card on File</button></a>";
                    }
                }
            }
        }

        ?>
        
        </div>

        <div id="cartside">
            <h3>Purchases</h3>
            <table id="purchaseTable">
                <col width="40%">
                <col width="20%">
                <col width="20%">
                <col width="20%">
                <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            <tfoot>
                <tr>
                    <th></th>
                    <th>Total: </th>
                    <th id="totalPrice"></th>
                    <th><button id="confirmCart">Enter Purchase</button></th>
            </tfoot>
            </table>
        </div>

        <div id="tabside">

            <div class="tab">
                <button class="tablinks" id="passestab">Passes</button>
                <button class="tablinks" id="membershipstab">Memberships</button>
                <button class="tablinks" id="foodtab">Food</button>
                <button class="tablinks" id="geartab">Gear</button>
            </div>

            <div id="passes" class="tabcontent">
                <h3>Passes</h3>
                <button id="daypassButton" class="passButton">$20 Day Pass</button>
                <button id="studentpassButton" class="passButton">$16 Student Pass</button>
                <button id="earlybirdButton" class="passButton">$15 Early Bird</button>
                <button id="kidspassButton" class="passButton">$10 Kids Pass</button>
            </div>

            <div id="memberships" class="tabcontent">
                <h3>Memberships</h3>
                <button id="singlemonthButton">$86 Single Month</button>
                <button id="monthlyButton">$75 Monthly Charge</button>
                <button id="annualButton">$1220 Annual</button>
                <button id="semesterButton">$240 Semester</button>

            </div>

            <div id="food" class="tabcontent">
                <h3>Food</h3>
                <button id="clifbarButton">$2 Clif Bar</button>
                <button id="yerbamateButton">$3 Yerba Mate</button>
                <button id="aquaviteaButton">$4 Aquavitea</button>
                <button id="probarButton">$4 ProBar</button>
            </div>

            <div id="gear" class="tabcontent">
                <h3>Gear</h3>
                <button id="rentalpackageButton">$10 Rental Package</button>
                <button id="atcButton">$15 ATC</button>
                <button id="harnessButton">$45 Harness</button>
            </div>

        </div>

            </div>
        

    </body>
    <script src="js/jQuery.js" type="text/javascript"></script>
    <script src="js/app.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
</html>


