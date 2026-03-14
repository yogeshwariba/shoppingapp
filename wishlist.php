<?php
if(session_status() == PHP_SESSION_NONE){ session_start(); }

// ✅ login required
if(!isset($_SESSION['user'])){
    $_SESSION['redirect_after_login'] = "men.php";
    header("Location: login.php?msg=login_required");
    exit();
}

if(isset($_POST['add_wishlist'])){
    $_SESSION['wishlist'][] = [
        "name" => $_POST['name'],
        "price" => $_POST['price'],
        "image" => $_POST['image']
    ];
}
$redirect = isset($_POST['redirect_page']) ? $_POST['redirect_page'] : "index.php";
header("Location: $redirect");
exit;
exit();
?>