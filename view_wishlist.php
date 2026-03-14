<?php
include("includes/header.php");

// Remove from wishlist
if(isset($_POST['remove_wishlist'])){
    $index = (int)$_POST['index'];
    if(isset($_SESSION['wishlist'][$index])){
        unset($_SESSION['wishlist'][$index]);
        $_SESSION['wishlist'] = array_values($_SESSION['wishlist']);
    }
}

// Move to cart (and remove from wishlist)
if(isset($_POST['move_to_cart'])){
    $index = (int)$_POST['index'];

    if(isset($_SESSION['wishlist'][$index])){
        $item = $_SESSION['wishlist'][$index];

        $_SESSION['cart'][] = $item;

        unset($_SESSION['wishlist'][$index]);
        $_SESSION['wishlist'] = array_values($_SESSION['wishlist']);
    }

    header("Location: view_cart.php");
    exit();
}
?>

<section class="products">
    <h2>Your Wishlist ❤</h2>

    <div class="product-grid">
        <?php if(!empty($_SESSION['wishlist'])): ?>
            <?php foreach($_SESSION['wishlist'] as $key => $item): ?>
                <div class="product-card">
                    <img src="images/<?php echo $item['image']; ?>" alt="">
                    <h3><?php echo $item['name']; ?></h3>
                    <div class="price"><?php echo $item['price']; ?></div>

                    <form method="POST" style="margin-top:10px;">
                        <input type="hidden" name="index" value="<?php echo $key; ?>">
                        <button type="submit" name="move_to_cart">Move to Cart 🛒</button>
                    </form>

                    <form method="POST" style="margin-top:10px;">
                        <input type="hidden" name="index" value="<?php echo $key; ?>">
                        <button type="submit" name="remove_wishlist">Remove ❌</button>
                    </form>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Your wishlist is empty</p>
        <?php endif; ?>
    </div>
</section>

<?php include("includes/footer.php"); ?>