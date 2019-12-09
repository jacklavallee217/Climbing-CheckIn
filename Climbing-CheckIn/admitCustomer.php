<?php 
    include 'connect.php';
    include 'recCust.php';
    session_start();

    $selected = mysqli_escape_string($conn, $_POST['selected']);
    $customer_id = mysqli_escape_string($conn, $_POST['customer_id']);

    $sql = "UPDATE customers SET admitted = $selected WHERE customer_id = $customer_id";

    $resultQuery = mysqli_query($conn, $sql);
?>