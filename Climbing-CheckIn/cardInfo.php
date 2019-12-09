<?php 
    include 'connect.php';
    include 'recCust.php';
    session_start();

    $id_cookie = mysqli_escape_string($conn, $_POST['id_cookie']);
    $firstnameCard = mysqli_escape_string($conn, $_POST['firstname_card']);
    $lastnameCard = mysqli_escape_string($conn, $_POST['lastname_card']);
    $cardNumber = mysqli_escape_string($conn, $_POST['cardNumber']);
    $cvv = mysqli_escape_string($conn, $_POST['cvv']);
    $exMonth = mysqli_escape_string($conn, $_POST['exMonth']);
    $exYear = mysqli_escape_string($conn, $_POST['exYear']);

    mysqli_query($conn, "UPDATE customers SET firstname_card = '$firstnameCard', lastname_card = '$lastnameCard', card_number = '$cardNumber', cvv = '$cvv', expiration_month = '$exMonth', expiration_year = '$exYear' WHERE customer_id = '$id_cookie'") or die(mysqli_error($conn));
    exit;
    
?>