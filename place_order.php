<?php
session_start();

if(isset($_POST['place_order'])){

    $_SESSION['order'] = [
        "name" => $_POST['fullname'],
        "phone" => $_POST['phone'],
        "address" => $_POST['address'],
        "payment" => $_POST['payment'],
        "products" => $_SESSION['cart']
    ];

    unset($_SESSION['cart']);

    header("Location: order_success.php");
}
?>
