// Index 

    // Search Customer

    $(document).ready(function() {
        $("#nameSearch").on("click", function() {
            var firstSearch = $('#firstSearch').val();
            var lastSearch = $('#lastSearch').val();

            if(firstSearch && lastSearch) {
                $.ajax({
                    type: "POST",
                    url: "nameSearchBoth.php",
                    data: "firstSearch=" + firstSearch + "&lastSearch=" + lastSearch,
                    success: function(data) {
                        $('#search').html(data);
                    }
                })
            }
            else if (lastSearch) {
                $.ajax({
                    type: "POST",
                    url: "nameSearchLast.php",
                    data: "lastSearch=" + lastSearch,
                    success: function(data) {
                        $('#search').html(data);
                    }
                })
            }
            else if (firstSearch) {
                $.ajax({
                    type: "POST",
                    url: "nameSearchFirst.php",
                    data: "firstSearch=" + firstSearch,
                    success: function(data) {
                        $('#search').html(data);
                    }
                })
            }
            else {
                alert("Nothing has been Entered");
            }

        });
    });


    // Waiver Queue

    $(document).ready(function() {
        $("#onlineWaivers").on("click", function() {
            $.ajax({
                type: "POST",
                url: "displayWaivers.php",
                data: "",
                success: function(data) {
                    $('#search').html(data);
                }
            })
        })
    });

    $("html").on("click", "#waiver", function() {
        var waiver_id = this.getAttribute("data-identifier");
        alert(waiver_id);
        $.ajax({
            type: "POST",
            url: "addWaiver.php",
            data: "waiver_id=" + waiver_id,
            success: function(data) {
                $('#search').html(data);
                console.log("Success: " + waiver_id);
            }
        })
    });

// Customer Profile

    // Admit Customer

    $(document).ready(function() {
        if ($(".admitCustomer").hasClass("selected")) {
            $(".admitCustomer").html("Customer Admitted");
        }
        else {
            $(".admitCustomer").html("Admit Customer");
        }
    });

    $(".admitCustomer").on("click", function(){
        var customer_id = this.getAttribute("data-identifier");
        var selected = $(".admitCustomer").hasClass("selected");


        if (selected == false) {
            $(".admitCustomer").removeClass('selected');
            $(this).addClass('selected');
            $(".admitCustomer").html("Customer Admitted");
            selected = true;
            console.log("selected = " + selected);

            $.ajax({
                type: "POST",
                url: "admitCustomer.php",
                data: "selected=" + selected + "&customer_id=" + customer_id,
                success: function(data) {
                    // $('#search').html(data);
                }
            })
        }
        else {
            $(this).removeClass('selected');
            $(".admitCustomer").html("Admit Customer");
            selected = false;

            $.ajax({
                type: "POST",
                url: "admitCustomer.php",
                data: "selected=" + selected + "&customer_id=" + customer_id,
                success: function(data) {
                    // $('#search').html(data);
                }
            })
        }
    }); 

/////

//Customer Purchase

    // LightBox

    $(document).ready(function() {
        $('#confirm-purchase').on('click', function() {
            var id_cookie = document.cookie;
            id_cookie = document.cookie.substring(document.cookie.indexOf("=") + 1, document.cookie.indexOf(";"));

            var firstnameCard = $('#firstnameCard').val();
            var lastnameCard = $('#lastnameCard').val();
            var cardNumber = $('#cardNumber').val();
            var cvv = $('#cvv').val();
            var exMonth = $('#exMonth').val();
            var exYear = $('#exYear').val();

            $.ajax({
                type: "POST",
                url: "cardInfo.php",
                data: "id_cookie=" + id_cookie + "&firstname_card=" + firstnameCard + "&lastname_card=" + lastnameCard + "&cardNumber=" + cardNumber + "&cvv=" + cvv + "&exMonth=" + exMonth + "&exYear=" + exYear,
                success: function(data) {
                    //$('.card-info').html(data);
                }
            });
        });
    });

    $(document).ready(function() {  
        $('#confirmCart').on('click', function() {
            var id_cookie = document.cookie;
            id_cookie = document.cookie.substring(document.cookie.indexOf("=") + 1, document.cookie.indexOf(";"));
            // alert(id_cookie);

            for (var i = 0; i < items.length; i++) {
                if (items[i].quantity > 0) {
                    itemArray.push(items[i]);
                }
            }

            //alert(itemArray.length);

            for (var i = 0; i < itemArray.length; i++) {
                $item_name = itemArray[i].name;
                $item_price = itemArray[i].price * itemArray[i].quantity;
                $item_quantity = itemArray[i].quantity;
                $item_type = itemArray[i].type;
                //alert("Price: " + $item_price + " Quantity: " + $item_quantity + " Type: " + $item_type);
                if (itemArray[i].type = "membership") {
                    switch(itemArray[i].name) {
                        case 'Single Month':
                            alert("reached");
                            $days_left = 30;
                            $.ajax({
                                type: "POST",
                                url: "addDays.php",
                                data: "item_current_id=" + id_cookie + "&days_left=" + $days_left,
                                success: function(data) {
                                    // $('#tabside').html(data);
                                }
                            });
                            break;
                        case 'Monthly Charge':
                            $days_left = 99999;
                            $.ajax({
                                type: "POST",
                                url: "addDays.php",
                                data: "item_current_id=" + id_cookie + "&days_left=" + $days_left,
                                success: function(data) {
                                    // $('#tabside').html(data);
                                }
                            });
                            break;
                        case 'Annual':
                            $days_left = 365;
                            $.ajax({
                                type: "POST",
                                url: "addDays.php",
                                data: "item_current_id=" + id_cookie + "&days_left=" + $days_left,
                                success: function(data) {
                                    // $('#tabside').html(data);
                                }
                            });
                            break;
                        case 'Semester':
                            $days_left = 120;
                            $.ajax({
                                type: "POST",
                                url: "addDays.php",
                                data: "item_current_id=" + id_cookie + "&days_left=" + $days_left,
                                success: function(data) {
                                    // $('#tabside').html(data);
                                }
                            });
                            break;
                    }
                }
                $.ajax({
                    type: "POST",
                    url: "insertCart.php",
                    data: "item_current_id=" + id_cookie + "&item_name=" + $item_name + "&item_price=" + $item_price + "&item_quantity=" + $item_quantity,
                    success: function(data) {
                        // $('#tabside').html(data);
                    }
                });
            }
            deleteAllRows();
            itemArray = [];
        });
    });


    // Tab System


    /*$('.tablinks').on('click', function(){
        if(this.id = '#passestab') {
            alert('ayo');
            $('.tabcontent').css('display', 'none');
            $('#passes').css('display', 'block'); 
            $('.tablinks').css('background-color', 'white');
            $('#passestab').css('background-color', 'darkseagreen');
        }
        else if(this.id = '#membershipstab') {
            alert('ayoo');
            $('.tabcontent').css('display', 'none');
            $('#memberships').css('display', 'block'); 
            $('.tablinks').css('background-color', 'white');
            $('#membershipstab').css('background-color', 'sandybrown');
        }
        else if(this.id = '#foodtab') {
            alert('ayooo');
            $('.tabcontent').css('display', 'none');
            $('#food').css('display', 'block'); 
            $('.tablinks').css('background-color', 'white');
            $('#foodtab').css('background-color', 'darksalmon');
        }
        else if(this.id = '#geartab') {
            alert('ayoooo');
            $('.tabcontent').css('display', 'none');
            $('#gear').css('display', 'block'); 
            $('.tablinks').css('background-color', 'white');
            $('#geartab').css('background-color', 'cornflowerblue');
        }
        else {
            alert('Who dis is');
        }
    });*/


    $('#passestab').on('click', function(){
        $('#passes').css('display', 'block');
        $('#memberships').css('display', 'none');
        $('#food').css('display', 'none');
        $('#gear').css('display', 'none');

        $('#passestab').css('background-color', 'darkseagreen');
        $('#passes').css('background-color', 'darkseagreen');

        $('#membershipstab').css('background-color', 'white');
        $('#memberships').css('background-color', 'white');
        $('#foodtab').css('background-color', 'white');
        $('#food').css('background-color', 'white');
        $('#geartab').css('background-color', 'white');
        $('#gear').css('background-color', 'white');
    });

    $('#membershipstab').on('click', function(){
        $('#passes').css('display', 'none');
        $('#memberships').css('display', 'block');
        $('#food').css('display', 'none');
        $('#gear').css('display', 'none');

        $('#membershipstab').css('background-color', 'sandybrown');
        $('#memberships').css('background-color', 'sandybrown');

        $('#passestab').css('background-color', 'white');
        $('#passes').css('background-color', 'white');
        $('#foodtab').css('background-color', 'white');
        $('#food').css('background-color', 'white');
        $('#geartab').css('background-color', 'white');
        $('#gear').css('background-color', 'white');
    });

    $('#foodtab').on('click', function(){
        $('#passes').css('display', 'none');
        $('#memberships').css('display', 'none');
        $('#food').css('display', 'block');
        $('#gear').css('display', 'none');

        $('#foodtab').css('background-color', 'darksalmon');
        $('#food').css('background-color', 'darksalmon');

        $('#passestab').css('background-color', 'white');
        $('#passes').css('background-color', 'white');
        $('#membershipstab').css('background-color', 'white');
        $('#memberships').css('background-color', 'white');
        $('#geartab').css('background-color', 'white');
        $('#gear').css('background-color', 'white');
    });

    $('#geartab').on('click', function(){
        $('#passes').css('display', 'none');
        $('#memberships').css('display', 'none');
        $('#food').css('display', 'none');
        $('#gear').css('display', 'block');

        $('#geartab').css('background-color', 'cornflowerblue');
        $('#gear').css('background-color', 'cornflowerblue');

        $('#passestab').css('background-color', 'white');
        $('#passes').css('background-color', 'white');
        $('#membershipstab').css('background-color', 'white');
        $('#memberships').css('background-color', 'white');
        $('#foodtab').css('background-color', 'white');
        $('#food').css('background-color', 'white');
    });

    // Table Print

    var itemArray = [];

    class itemObject {
        constructor(name, price, quantity, type, price_id, quantity_id, remove_row) {
            this._name = name;
            this._price = price;
            this._quantity = quantity;
            this._type = type;
            this._price_id = price_id;
            this._quantity_id = quantity_id;
            this._remove_row = remove_row;
        }

        get name() {
            return this._name;
        }

        set name(name) {
            this._name = name;
        }

        get price() {
            return this._price;
        }

        set price(price) {
            this._price = price;
        }

        get quantity() {
            return this._quantity;
        }

        set quantity(quantity) {
            this._quantity = quantity;
        }

        get type() {
            return this._type;
        }

        set type(type) {
            this._type = type;
        }

        get price_id() {
            return this._price_id;
        }

        set price_id(price_id) {
            this._price_id = price_id
        }

        get quantity_id() {
            return this._quantity_id;
        }

        set quantity_id(quantity_id) {
            this._quantity_id = quantity_id
        }

        get remove_row() {
            return this._remove_row;
        }

        set remove_row(remove_row) {
            this._remove_row = remove_row;
        }

        itemAdded() {
            this.quantity++;

            if(this.quantity <= 1) {
                $('#purchaseTable').append(
                    "<tr class='purchaseRow'>" +
                    "<td>"+ this.name +"</td>" +
                    "<td id="+ this.quantity_id +">"+ this.quantity +"</td>" +
                    "<td id="+ this.price_id +">$"+ this.price.toFixed(2) +"</td>" +
                    "<td><button class='removeRow' id="+ this.remove_row +">Delete</button></td>" +
                "</tr>"
                );
                totalPrice = totalPrice += this.price;
                $('#totalPrice').html("$" + (totalPrice).toFixed(2));
                }
            else {
                $('#' + this.quantity_id).html(this.quantity);
                $('#' + this.price_id).html("$" + (this.quantity * this.price).toFixed(2));
                totalPrice += this.price;
                $('#totalPrice').html("$" + (totalPrice).toFixed(2));
            }
        }

        removeRow() {
            $('#' + this.remove_row).parent('td').parent('tr').remove();
            totalPrice = totalPrice - (this.price * this.quantity);
            $('#totalPrice').html("$" + (totalPrice).toFixed(2));
            this.quantity = 0;
        }
    }

    var totalPrice = 0.00;

    const types = {
        PASS: 'pass',
        MEMBERSHIP: 'membership',
        FOOD: 'food',
        GEAR: 'gear'
    }

    var daypass = new itemObject("Day Pass", 20.00, 0, types.PASS, "daypassPrice", "daypassQuantity", "daypassRemove");
    var studentpass = new itemObject("Student Pass", 16.00, 0, types.PASS, "studentpassPrice", "studentpassQuantity", "studentpassRemove");
    var earlybird = new itemObject("Early Bird", 15.00, 0, types.PASS, "earlybirdPrice", "earlybirdQuantity", "earlybirdRemove");
    var kidspass = new itemObject("Kids Pass", 10.00, 0, types.PASS, "kidspassPrice", "kidspassQuantity", "kidspassRemove");
    var singlemonth = new itemObject("Single Month", 86.00, 0, types.MEMBERSHIP, "singlemonthPrice", "singlemonthQuantity", "singlemonthRemove");
    var monthlycharge = new itemObject("Monthly Charge", 75.00, 0, types.MEMBERSHIP, "monthlychargePrice", "monthlychargeQuantity", "monthlychargeRemove");
    var annual = new itemObject("Annual", 1220.00, 0, types.MEMBERSHIP, "annualPrice", "annualQuantity", "annualRemove");
    var semester = new itemObject("Semester", 240.00, 0, types.MEMBERSHIP, "semesterPrice", "semesterQuantity", "semesterRemove");
    var clifbar = new itemObject("Clif Bar", 2.00, 0, types.FOOD, "clifbarPrice", "clifbarQuantity", "clifbarRemove");
    var yerbamate = new itemObject("Yerba Mate", 3.00, 0, types.FOOD, "yerbamatePrice", "yerbamateQuantity", "yerbamateRemove");
    var aquavitea = new itemObject("Aquavitea", 4.00, 0, types.FOOD, "aquaviteaPrice", "aquaviteaQuantity", "aquaviteaRemove");
    var probar = new itemObject("ProBar", 4.00, 0, types.FOOD, "probarPrice", "probarQuantity", "probarRemove");
    var rentalpackage = new itemObject("Rental Package", 10.00, 0, types.GEAR, "rentalpackagePrice", "rentalpackageQuantity", "rentalpackageRemove");
    var atc = new itemObject("ATC", 15.00, 0, types.GEAR, "atcPrice", "atcQuantity", "atcRemove");
    var harness = new itemObject("Harness", 45.00, 0, types.GEAR, "harnessPrice", "harnessQuantity", "harnessRemove");


    var items = [daypass, studentpass, earlybird, kidspass, singlemonth, monthlycharge, annual, semester, clifbar, yerbamate, aquavitea, probar, rentalpackage, atc, harness];

    $('#daypassButton').on('click', function() {
        daypass.itemAdded();
    });

    $('#studentpassButton').on('click', function() {
        studentpass.itemAdded();
    });

    $('#earlybirdButton').on('click', function() {
        earlybird.itemAdded();
    });

    $('#kidspassButton').on('click', function() {
        kidspass.itemAdded();
    });

    $('#singlemonthButton').on('click', function() {
        singlemonth.itemAdded();
    });

    $('#monthlyButton').on('click', function() {
        monthlycharge.itemAdded();
    });

    $('#annualButton').on('click', function() {
        annual.itemAdded();
    });

    $('#semesterButton').on('click', function() {
        semester.itemAdded();
    });

    $('#clifbarButton').on('click', function() {
        clifbar.itemAdded();
    });

    $('#yerbamateButton').on('click', function() {
        yerbamate.itemAdded();
    });

    $('#aquaviteaButton').on('click', function() {
        aquavitea.itemAdded();
    });

    $('#probarButton').on('click', function() {
        probar.itemAdded();
    });

    $('#rentalpackageButton').on('click', function() {
        rentalpackage.itemAdded();
    });

    $('#atcButton').on('click', function() {
        atc.itemAdded();
    });

    $('#harnessButton').on('click', function() {
        harness.itemAdded();
    });

    function deleteAllRows() {
        $('.purchaseRow').remove();
        for (var i = 0; i < items.length; i++) {
            items[i].quantity = 0;
        }
        totalPrice = 0.00;
        $('#totalPrice').html("$" + (totalPrice).toFixed(2));
    }

    $('html').on('click', '#daypassRemove', function() {
        daypass.removeRow();
    });

    $('html').on('click', '#studentpassRemove', function() {
        studentpass.removeRow();
    });

    $('html').on('click', '#earlybirdRemove', function() {
        earlybird.removeRow();
    });

    $('html').on('click', '#kidspassRemove', function() {
        kidspass.removeRow();
    });

    $('html').on('click', '#singlemonthRemove', function() {
        singlemonth.removeRow();
    });

    $('html').on('click', '#monthlychargeRemove', function() {
        monthlycharge.removeRow();
    });

    $('html').on('click', '#annualRemove', function() {
        annual.removeRow();
    });

    $('html').on('click', '#semesterRemove', function() {
        semester.removeRow();
    });

    $('html').on('click', '#clifbarRemove', function() {
        clifbar.removeRow();
    });

    $('html').on('click', '#yerbamateRemove', function() {
        yerbamate.removeRow();
    });

    $('html').on('click', '#aquaviteaRemove', function() {
        aquavitea.removeRow();
    });

    $('html').on('click', '#probarRemove', function() {
        probar.removeRow();
    });

    $('html').on('click', '#rentalpackageRemove', function() {
        rentalpackage.removeRow();
    });

    $('html').on('click', '#atcRemove', function() {
        atc.removeRow();
    });

    $('html').on('click', '#harnessRemove', function() {
        harness.removeRow();
    });