
<?php 
include("includes/header.php");

if(!isset($_SESSION['user'])){
    echo "<script>alert('Please Login First to Place Order');</script>";
    echo "<script>window.location='login.php';</script>";
    exit();
}
?>


<section class="products">
    <h2>Checkout 🧾</h2>

    <?php if(empty($_SESSION['cart'])): ?>
        <p>Your cart is empty</p>
    <?php else: ?>

        <form method="POST">

            <div style="max-width:500px; margin:auto;">

                <input type="text" name="fullname" placeholder="Full Name" required><br><br>

                <input type="text" name="phone" placeholder="Phone Number" required><br><br>

                <textarea name="address" placeholder="Full Address" required></textarea><br><br>

                <button type="submit" name="place_order">
                    Place Order ✅
                </button>

            </div>

        </form>

    <?php endif; ?>
</section>

<?php
if(isset($_POST['place_order'])){

    // Clear cart after order
    $_SESSION['cart'] = [];

    echo "<script>alert('Order Placed Successfully 🎉');</script>";
    echo "<script>window.location='men.php';</script>";
}
?>

<?php include("includes/footer.php"); ?>
