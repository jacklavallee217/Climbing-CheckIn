<!DOCTYPE HTML>
<HTML>

    <head>

        <link href="css/main.css" rel="stylesheet"/>
        <link href="css/customer_profile.css" rel="stylesheet"/>
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
                        echo '<title>Customer: ' . $row["fname"] . ' ' . $row["lname"] . '</title>';

                        echo "</head>";

                        echo "<body>";

                        //require "header.php";

                        echo "<h1 id='profileHeader'>Customer Profile</h1>";

                        echo "<div class='baseInfo' id='priv" . $row["privilege"] . "'>";
                            echo "<div id='flexInfo'>";
                                echo "<div>";
                                    echo "<img src='" . $row["profile_picture"] ."' width='200px' height='200px'>";
                                echo "</div>";
                                echo "<div>";
                                    echo '<h1>' . $row["fname"] . " " . $row["lname"] . '</h1>';
                                    echo '<h1>Age: ' . $row["age"] . '</h1>';
                                echo '</div>';
                                echo "<div>";
                                    echo '<h3>Membership: ' . $row["membership"] . '</h3>';
                                    echo '<h3>Privilege: ' . $row["privilege"] . '</h3>';
                                echo "</div>";
                            echo "</div>";
                            echo "<p>" . $row['notes'] . "</p>";
                        echo '</div>';
                
                        echo "<div id='dailyFunctions' class='sections'>";
                             if($row["admitted"] != 1) { 
                                echo "<button class='admitCustomer' name='Admit Customer' type='button' data-type='customer_id' data-identifier='" . $row["customer_id"] . "'>Admit Customer</button> ";
                             } 
                            else { 
                                echo "<button class='admitCustomer selected' name='Admit Customer' type='button' data-type='customer_id' data-identifier='" . $row["customer_id"] . "'></button> "; 
                            }

                        echo "
                            <a class='cust_purch' name='cust_purch' href='customer_purchase.php?" . $row["customer_id"] . "'><button name=Enter Purchase' type='button'>Enter Purchase</button></a>
                        </div>
                        <div id='staffHandling' class='sections'>
                            <form action='staffHandling.php'>
                                <div>
                                    <select id='membership' name='membership'>
                                        <option value='0' name='' disabled selected>Membership</option>
                                        <option value='1' name='none'>None</option>
                                        <option value='2' name='daypass'>Day Pass</option>
                                        <option value='3' name='singlemonth'>Single Month</option>
                                        <option value='4' name='monthly'>Monthly</option>
                                        <option value='5' name='semester'>Semester</option>
                                        <option value='6' name='annual'>Annual</option>
                                        <option value='7' name='banned'>Banned</option>
                                        <option value='8' name='staff'>Staff</option>
                                        <option value='9' name='lifetime'>Lifetime</option>
                                    </select>
                                    <select id='privilege' name='privilege'>
                                        <option value='0' name='' disabled selected>Privilege</option>
                                        <option value='1' name='none'>None</option>
                                        <option value='2' name='bouldering'>Bouldering</option>
                                        <option value='3' name='toproping'>Toproping</option>
                                        <option value='4' name='lead'>Lead</option>
                                    </select>
                                </div>
                                <input type='text' name='current_id' value='" . $row['customer_id'] . "' />
                                <div>
                                    <textarea rows='5' cols='50' name='notes' placeholder='Enter comment here...'></textarea>
                                    <input type='submit' />
                                </div>
                            </form>
                        </div>
                        <div id='managementHandling' class='sections'>
                            <button name='Purchase History' type='button'>Purchase History</button>
                            <button name='Edit Account' type='button'>Edit Account</button>
                            <button name='Delete Account' type='button'>Delete Account</button>
                        </div>";
                    }
                }
            }
        }

        ?>

    </body>
    <script src="js/jQuery.js" type="text/javascript"></script>
    <script src="js/app.js" type="text/javascript"></script>
</html>
