<?php include("includes/header.php"); ?>

<section class="products">
    <h2>Your Cart 🛒</h2>

    <div class="product-grid">
<?php if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])): ?>

    <div style="text-align:center; margin:30px 0;">
        <a href="checkout.php" class="checkout-btn">
            Proceed to Checkout 🛍
        </a>
    </div>

<?php endif; ?>


        <?php
        if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){

            foreach($_SESSION['cart'] as $key => $item){
        ?>

            <div class="product-card">
                <img src="images/<?php echo $item['image']; ?>" alt="">
                <h3><?php echo $item['name']; ?></h3>
                <div class="price"><?php echo $item['price']; ?></div>

                <!-- REMOVE BUTTON -->
                <form method="POST" action="">
                    <input type="hidden" name="remove_index" value="<?php echo $key; ?>">
                    <button type="submit" name="remove_cart">Remove ❌</button>
                </form>
            </div>

        <?php
            }
        } else {
            echo "<p>Your cart is empty</p>";
        }
        ?>

    </div>
</section>

<?php
// REMOVE LOGIC
if(isset($_POST['remove_cart'])){
    unset($_SESSION['cart'][$_POST['remove_index']]);
    $_SESSION['cart'] = array_values($_SESSION['cart']);
    header("Location: view_cart.php");
}
?>

<?php include("includes/footer.php"); ?>
