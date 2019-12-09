<!DOCTYPE HTML>
<HTML>

<head>



        <?php
        require 'connect.php';
        include 'recCust.php';
        session_start();
        

            if ($_SESSION != null) {
                foreach ($_SESSION as $cust) {
                    if ($cust->getcustomer_id() == $_SERVER['QUERY_STRING']) {
                        $current_id = $cust->getcustomer_id();
                        echo '<title>Purchase: ' . $cust->getfname() . ' ' . $cust->getlname() . '</title>
                        </head>
                        <body>     
                            <div class="lightWrapper card-info">    
                                <h2>Enter / Edit Card Information</h2>
                                <div class="cardform-group nameOnCard">
                                    <label for="nameOnCard">First Name: </label>
                                    <input type="text" class="cardform" id="firstnameCard">
                                </div>
                                <div class="cardform-group nameOnCard">
                                    <label for="nameOnCard">Last Name: </label>
                                    <input type="text" class="cardform" id="lastnameCard">
                                </div>
                                <div class="cardform-group cardNumber">
                                    <label for="cardNumber">Card Number: </label>
                                    <input type="text" class="cardform" id="cardNumber">
                                </div>
                                <div class="cardform-group-flex">
                                    <div class="CVV cardform-flex">
                                        <label for="cvv">CVV</label>
                                        <input type="text" class="cardform" id="cvv">
                                    </div>
                                    <div class="cardform-flex">
                                        <label>Expiration Date</label>
                                        <select id="exMonth">
                                            <option value="01">January</option>
                                            <option value="02">February </option>
                                            <option value="03">March</option>
                                            <option value="04">April</option>
                                            <option value="05">May</option>
                                            <option value="06">June</option>
                                            <option value="07">July</option>
                                            <option value="08">August</option>
                                            <option value="09">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                        <select id="exYear">
                                            <option value="19"> 2019</option>
                                            <option value="20"> 2020</option>
                                            <option value="21"> 2021</option>
                                            <option value="22"> 2022</option>
                                            <option value="23"> 2023</option>
                                            <option value="24"> 2024</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="cardform-group confirm">
                                <!--<a id="enter_card" name="enter_card" href="customer_purchase.php?' . $current_id . '">--><button type="submit" id="confirm-purchase">Confirm</button><!--</a>-->
                                </div>     
                            </div>
                            <div class="lightWrapper verification">
                                <h1>Your Account has been updated with your Card Information</h1>
                            </div>';

                        //print_r($_COOKIE);

                        //echo $current_id;
                    }
                }
            }

            ?>    
    </body>
    <link href="css/main.css" rel="stylesheet"/>
    <link href="css/customer_purchase.css" rel="stylesheet"/>
    <script src="js/jQuery.js" type="text/javascript"></script>
    <script src="js/app.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
</HTML>