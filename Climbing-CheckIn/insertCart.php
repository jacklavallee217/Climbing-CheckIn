<?php 
    include 'connect.php';
    include 'recCust.php';
    session_start();

    
    
    $item_current_id = mysqli_escape_string($conn, $_POST['item_current_id']);
    $item_name = mysqli_escape_string($conn, $_POST['item_name']);
    $item_price = mysqli_escape_string($conn, $_POST['item_price']);
    $item_quantity = mysqli_escape_string($conn, $_POST['item_quantity']);

    mysqli_query($conn, "INSERT INTO cart(customer_id, item_name, item_price, item_quantity) VALUES('{$item_current_id}', '{$item_name}', '{$item_price}', '{$item_quantity}')") or die(mysqli_error($conn));
    exit;
    
?>

