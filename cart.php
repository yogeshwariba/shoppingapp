<?php
if(session_status() == PHP_SESSION_NONE){ session_start(); }

// ✅ login required
if(!isset($_SESSION['user'])){
    $_SESSION['redirect_after_login'] = "men.php";
    header("Location: login.php?msg=login_required");
    exit();
}

if(isset($_POST['add_cart'])){
    $_SESSION['cart'][] = [
        "name" => $_POST['name'],
        "price" => $_POST['price'],
        "image" => $_POST['image']
    ];
}

header("Location: view_cart.php");
exit();
?>