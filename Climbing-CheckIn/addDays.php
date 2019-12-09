<?php 
    include 'connect.php';
    include 'recCust.php';
    session_start();

    $item_current_id = mysqli_escape_string($conn, $_POST['item_current_id']);
    $days_left = mysqli_escape_string($conn, $_POST['days_left']);

    mysqli_query($conn, "UPDATE customers SET days_left = $days_left WHERE customer_id = $item_current_id") or die(mysqli_error($conn));
    exit;
    
?>