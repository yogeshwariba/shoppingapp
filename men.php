<?php include("includes/header.php"); ?>

<?php
$category = isset($_GET['category']) ? $_GET['category'] : 'all';

$products = [

    ["id"=>1,"name"=>"Formal Shirt","price"=>"₹899","image"=>"shirt1.jfif","category"=>"shirts","rating"=>"4.4 ★","reviews"=>"1200 Reviews"],
    ["id"=>2,"name"=>"Slim Fit Shirt","price"=>"₹799","image"=>"shirt2.jfif","category"=>"shirts","rating"=>"4.0 ★","reviews"=>"850 Reviews"],
    ["id"=>3,"name"=>"Slim Fit Shirt","price"=>"₹750","image"=>"shirt3.jfif","category"=>"shirts","rating"=>"4.2 ★","reviews"=>"850 Reviews"],
    ["id"=>4,"name"=>"Slim Fit Shirt","price"=>"₹890","image"=>"shirt4.jfif","category"=>"shirts","rating"=>"4.5 ★","reviews"=>"850 Reviews"],
    ["id"=>5,"name"=>"Slim Fit Shirt","price"=>"₹885","image"=>"shirt5.jfif","category"=>"shirts","rating"=>"4.0 ★","reviews"=>"850 Reviews"],
    ["id"=>6,"name"=>"Slim Fit Shirt","price"=>"₹830","image"=>"shirt6.jfif","category"=>"shirts","rating"=>"4.9 ★","reviews"=>"850 Reviews"],
    ["id"=>7,"name"=>"Slim Fit Shirt","price"=>"₹800","image"=>"shirt7.jfif","category"=>"shirts","rating"=>"4.5 ★","reviews"=>"850 Reviews"],
    ["id"=>8,"name"=>"Slim Fit Shirt","price"=>"₹650","image"=>"shirt8.jfif","category"=>"shirts","rating"=>"4.2 ★","reviews"=>"850 Reviews"],
    ["id"=>9,"name"=>"Slim Fit Shirt","price"=>"₹659","image"=>"shirt9.jfif","category"=>"shirts","rating"=>"4.6 ★","reviews"=>"850 Reviews"],
    ["id"=>10,"name"=>"Slim Fit Shirt","price"=>"₹799","image"=>"shirt10.jfif","category"=>"shirts","rating"=>"4.3 ★","reviews"=>"850 Reviews"],
    

    ["id"=>11,"name"=>"Casual T-Shirt","price"=>"₹599","image"=>"tshirt1.jfif","category"=>"tshirts","rating"=>"4.3 ★","reviews"=>"1500 Reviews"],
    ["id"=>12,"name"=>"Casual T-Shirt","price"=>"₹459","image"=>"tshirt2.jfif","category"=>"tshirts","rating"=>"4.1 ★","reviews"=>"1500 Reviews"],
    ["id"=>13,"name"=>"Casual T-Shirt","price"=>"₹399","image"=>"tshirt3.jfif","category"=>"tshirts","rating"=>"4.5 ★","reviews"=>"1500 Reviews"],
    ["id"=>14,"name"=>"Casual T-Shirt","price"=>"₹550","image"=>"tshirt4.jfif","category"=>"tshirts","rating"=>"4.2 ★","reviews"=>"1500 Reviews"],
    ["id"=>15,"name"=>"Casual T-Shirt","price"=>"₹580","image"=>"tshirt5.jfif","category"=>"tshirts","rating"=>"4.3 ★","reviews"=>"1500 Reviews"],
    ["id"=>16,"name"=>"Casual T-Shirt","price"=>"₹525","image"=>"tshirt6.jfif","category"=>"tshirts","rating"=>"4.5 ★","reviews"=>"1500 Reviews"],
    ["id"=>17,"name"=>"Casual T-Shirt","price"=>"₹450","image"=>"tshirt7.jfif","category"=>"tshirts","rating"=>"4.2★","reviews"=>"1500 Reviews"],


    ["id"=>18,"name"=>"Men Denim Jeans","price"=>"₹639","image"=>"jeans1.jfif","category"=>"jeans","rating"=>"4.4 ★","reviews"=>"17127 Reviews"],
    ["id"=>19,"name"=>"Men Denim Jeans","price"=>"₹650","image"=>"jeans2.jfif","category"=>"jeans","rating"=>"4.2 ★","reviews"=>"17127 Reviews"],
    ["id"=>20,"name"=>"Men Denim Jeans","price"=>"₹350","image"=>"jeans3.jfif","category"=>"jeans","rating"=>"4.3 ★","reviews"=>"17127 Reviews"],
    ["id"=>21,"name"=>"Men Denim Jeans","price"=>"₹620","image"=>"jeans4.jfif","category"=>"jeans","rating"=>"3.5 ★","reviews"=>"17127 Reviews"],
    ["id"=>22,"name"=>"Men Denim Jeans","price"=>"₹550","image"=>"jeans5.jfif","category"=>"jeans","rating"=>"4.2 ★","reviews"=>"17127 Reviews"],
    ["id"=>23,"name"=>"Men Denim Jeans","price"=>"₹450","image"=>"jeans6.jfif","category"=>"jeans","rating"=>"4.0 ★","reviews"=>"17127 Reviews"],
    ["id"=>24,"name"=>"Men Denim Jeans","price"=>"₹360","image"=>"jeans7.jfif","category"=>"jeans","rating"=>"4.6 ★","reviews"=>"17127 Reviews"],


    ["id"=>25,"name"=>"Grey Trouser","price"=>"₹1099","image"=>"trouser1.jfif","category"=>"trousers","rating"=>"4.2 ★","reviews"=>"890 Reviews"],
    ["id"=>26,"name"=>"Grey Trouser","price"=>"₹999","image"=>"trouser2.jfif","category"=>"trousers","rating"=>"4.1 ★","reviews"=>"890 Reviews"],
    ["id"=>27,"name"=>"Grey Trouser","price"=>"₹499","image"=>"trouser3.jfif","category"=>"trousers","rating"=>"4.3 ★","reviews"=>"890 Reviews"],
    ["id"=>28,"name"=>"Grey Trouser","price"=>"₹699","image"=>"trouser4.jfif","category"=>"trousers","rating"=>"4.0 ★","reviews"=>"890 Reviews"],
    ["id"=>29,"name"=>"Grey Trouser","price"=>"₹860","image"=>"trouser5.jfif","category"=>"trousers","rating"=>"4.5 ★","reviews"=>"890 Reviews"],
    ["id"=>30,"name"=>"Grey Trouser","price"=>"₹799","image"=>"trouser6.jfif","category"=>"trousers","rating"=>"4.2 ★","reviews"=>"890 Reviews"],
    ["id"=>31,"name"=>"Grey Trouser","price"=>"₹699","image"=>"trouser7.jfif","category"=>"trousers","rating"=>"4.5 ★","reviews"=>"890 Reviews"],

    ["id"=>32,"name"=>"Winter Jacket","price"=>"₹1999","image"=>"jacket1.jfif","category"=>"jackets","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>33,"name"=>"Winter Jacket","price"=>"699","image"=>"jacket2.jfif","category"=>"jackets","rating"=>"4.7 ★","reviews"=>"102 Reviews"],
    ["id"=>34,"name"=>"Winter Jacket","price"=>"₹799","image"=>"jacket3.jfif","category"=>"jackets","rating"=>"4.6 ★","reviews"=>"102 Reviews"],
    ["id"=>35,"name"=>"Winter Jacket","price"=>"₹899","image"=>"jacket4.jfif","category"=>"jackets","rating"=>"4.5 ★","reviews"=>"102 Reviews"],
    ["id"=>36,"name"=>"Winter Jacket","price"=>"₹699","image"=>"jacket5.jfif","category"=>"jackets","rating"=>"4.4 ★","reviews"=>"102 Reviews"],
    ["id"=>37,"name"=>"Winter Jacket","price"=>"₹599","image"=>"jacket6.jfif","category"=>"jackets","rating"=>"4.3 ★","reviews"=>"102 Reviews"],
    ["id"=>38,"name"=>"Winter Jacket","price"=>"₹899","image"=>"jacket7.jfif","category"=>"jackets","rating"=>"4.2 ★","reviews"=>"102 Reviews"],
    ["id"=>39,"name"=>"Winter Jacket","price"=>"₹599","image"=>"jacket8.jfif","category"=>"jackets","rating"=>"4.1 ★","reviews"=>"102 Reviews"],
    ["id"=>40,"name"=>"Winter Jacket","price"=>"₹699","image"=>"jacket9.jfif","category"=>"jackets","rating"=>"4.0 ★","reviews"=>"102 Reviews"],
    ["id"=>41,"name"=>"Winter Jacket","price"=>"₹999","image"=>"jacket10.jfif","category"=>"jackets","rating"=>"4.8 ★","reviews"=>"102 Reviews"],

    ["id"=>42,"name"=>"kurta","price"=>"₹1999","image"=>"kurta1.jfif","category"=>"kurta","rating"=>"4.0 ★","reviews"=>"102 Reviews"],
    ["id"=>43,"name"=>"kurta","price"=>"₹999","image"=>"kurta2.jfif","category"=>"kurta","rating"=>"4.1 ★","reviews"=>"102 Reviews"],
    ["id"=>44,"name"=>"kurta","price"=>"₹799","image"=>"kurta3.jfif","category"=>"kurta","rating"=>"4.2 ★","reviews"=>"102 Reviews"],
    ["id"=>45,"name"=>"kurta","price"=>"₹899","image"=>"kurta4.jfif","category"=>"kurta","rating"=>"4.3 ★","reviews"=>"102 Reviews"],
    ["id"=>46,"name"=>"kurta","price"=>"₹699","image"=>"kurta5.jfif","category"=>"kurta","rating"=>"4.4 ★","reviews"=>"102 Reviews"],
    ["id"=>47,"name"=>"kurta","price"=>"₹599","image"=>"kurta7.jfif","category"=>"kurta","rating"=>"4.5 ★","reviews"=>"102 Reviews"],
    ["id"=>48,"name"=>"kurta","price"=>"₹499","image"=>"kurta8.jfif","category"=>"kurta","rating"=>"4.6 ★","reviews"=>"102 Reviews"],
    ["id"=>49,"name"=>"kurta","price"=>"₹1399","image"=>"kurta9.jfif","category"=>"kurta","rating"=>"4.7 ★","reviews"=>"102 Reviews"],
    ["id"=>50,"name"=>"kurta","price"=>"₹1299","image"=>"kurta6.jfif","category"=>"kurta","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
];
?>
<?php
// SORTING LOGIC
if(isset($_GET['sort'])){

    if($_GET['sort'] == "low_high"){
        usort($products, function($a, $b){
            return intval(filter_var($a['price'], FILTER_SANITIZE_NUMBER_INT)) -
                   intval(filter_var($b['price'], FILTER_SANITIZE_NUMBER_INT));
        });
    }

    if($_GET['sort'] == "high_low"){
        usort($products, function($a, $b){
            return intval(filter_var($b['price'], FILTER_SANITIZE_NUMBER_INT)) -
                   intval(filter_var($a['price'], FILTER_SANITIZE_NUMBER_INT));
        });
    }

}
?>
<form action="virtual_try.php" method="POST">
    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
    <input type="hidden" name="cloth_image" value="<?php echo $product['image_url']; ?>">
    <button type="submit">Virtual Try</button>
</form>

<!-- HERO -->
<section class="sub-hero">
    <h1>Men's Collection</h1>
    <p>Style that defines you</p>
</section>

<!-- CATEGORY -->
<section class="men-section">
    <div class="category-grid">
        <div class="category-card"><a href="men.php?category=shirts">Shirts</a></div>
        <div class="category-card"><a href="men.php?category=tshirts">T-Shirts</a></div>
        <div class="category-card"><a href="men.php?category=jeans">Jeans</a></div>
        <div class="category-card"><a href="men.php?category=trousers">Trousers</a></div>
        <div class="category-card"><a href="men.php?category=jackets">Jackets</a></div>
        <div class="category-card"><a href="men.php?category=kurta">kurta</a></div>
        <div class="category-card"><a href="men.php">All</a></div>
    </div>
</section>
<form method="GET">

    <!-- Preserve Category -->
    <input type="hidden" name="category" value="<?php echo $category; ?>">

    <select name="sort" onchange="this.form.submit()">
        <option value="">Sort By</option>

        <option value="low_high"
            <?php if(isset($_GET['sort']) && $_GET['sort']=="low_high") echo "selected"; ?>>
            Price: Low to High
        </option>

        <option value="high_low"
            <?php if(isset($_GET['sort']) && $_GET['sort']=="high_low") echo "selected"; ?>>
            Price: High to Low
        </option>

    </select>
</form>
<!-- PRODUCTS -->
<section class="products">
    <div class="product-grid">

        <?php foreach($products as $product): ?>
            <?php if($category == 'all' || $product['category'] == $category): ?>

<div class="product-card">

    <!-- ✅ Wishlist (heart) -->
    <form action="wishlist.php" method="POST">
    <input type="hidden" name="name" value="<?php echo $product['name']; ?>">
    <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
    <input type="hidden" name="image" value="<?php echo $product['image']; ?>">
    <input type="hidden" name="redirect_page" value="men.php">
    <button type="submit" name="add_wishlist">❤</button>
</form>

    <img src="images/<?php echo $product['image']; ?>" alt="">

    <h3><?php echo $product['name']; ?></h3>
    <div class="price"><?php echo $product['price']; ?></div>
    <div class="delivery">Free Delivery</div>

    <div class="rating">
        <span class="rating-box"><?php echo $product['rating']; ?></span>
        <span class="reviews"><?php echo $product['reviews']; ?></span>
    </div>

    <!-- ✅ Add to cart -->
    <form action="cart.php" method="POST">
        <input type="hidden" name="name" value="<?php echo $product['name']; ?>">
        <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
        <input type="hidden" name="image" value="<?php echo $product['image']; ?>">
        <button type="submit" name="add_cart">Add to Cart</button>
    </form>

</div>

            <?php endif; ?>
        <?php endforeach; ?>
<?php if(!isset($_SESSION['user'])): ?>

    <a href="login.php?msg=login_required" class="wishlist-btn">❤</a>

<?php else: ?>

    <form method="POST" action="wishlist.php">
        <input type="hidden" name="name" value="<?php echo $product['name']; ?>">
        <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
        <input type="hidden" name="image" value="<?php echo $product['image']; ?>">
        
    </form>

<?php endif; ?>


    </div>
</section>

<?php include("includes/footer.php"); ?>
