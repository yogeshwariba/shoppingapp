<?php 
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>LuxeTrend 💎 </title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

</head>
<body>

<header class="main-header">
    <div class="logo">LuxeTrend 💎</div>

    <nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="women.php">Women</a></li>
            <li><a href="men.php">Men</a></li>
            <li><a href="all.php">All</a></li>
            <li><a href="virtual_try.php">virtual_try</a></li>
        </ul>
    </nav>
<div class="auth-section">

    <!-- Cart -->
    <a href="view_cart.php" class="cart-icon">
        🛒 
        <?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>
    </a>

    <!-- Wishlist -->
    <a href="view_wishlist.php" class="wishlist-icon">
        ❤ 
        <?php echo isset($_SESSION['wishlist']) ? count($_SESSION['wishlist']) : 0; ?>
    </a>

    <?php if(isset($_SESSION['user'])): ?>
        <a href="profile.php">Profile</a>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <a href="login.php">Login</a>
        <a href="signup.php" class="signup-btn">Sign Up</a>
    <?php endif; ?>

</div>

</header>
