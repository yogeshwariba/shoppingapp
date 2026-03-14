<?php 
include("includes/header.php");

$products = include("products_data.php");

$id = isset($_GET['id']) ? $_GET['id'] : null;

if($id === null || !isset($products[$id])){
    echo "<h2 style='padding:50px;'>Product not found</h2>";
    include("includes/footer.php");
    exit();
}

$product = $products[$id];
?>

<section class="single-product">

    <div class="single-product-wrapper">

        <!-- LEFT IMAGE -->
        <div class="single-product-left">
            <img src="images/<?php echo $product['image']; ?>" alt="">
        </div>

        <!-- RIGHT DETAILS -->
        <div class="single-product-right">

            <h2><?php echo $product['name']; ?></h2>
            <div class="single-price"><?php echo $product['price']; ?></div>

            <div class="single-rating">
                ⭐ 4.4 (1200 Reviews)
            </div>

            <p class="single-description">
                Premium fabric with modern slim fit design.
                Perfect for daily wear and formal occasions.
            </p>

            <div class="size-box">
                <h4>Select Size:</h4>
                <div class="size-buttons">
                    <button>S</button>
                    <button>M</button>
                    <button>L</button>
                    <button>XL</button>
                </div>
            </div>

            <button class="main-add-btn">Add to Cart</button>

        </div>

    </div>

</section>

<?php include("includes/footer.php"); ?>
