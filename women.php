<?php include("includes/header.php"); ?>

<?php
$category = isset($_GET['category']) ? $_GET['category'] : 'all';

$products = [

["id"=>1,"name"=>"top","price"=>"₹899","image"=>"topwear1.jfif","category"=>"topwear","rating"=>"4.4 ★","reviews"=>"1200 Reviews"],  
["id"=>2,"name"=>"top","price"=>"₹1099","image"=>"topwear2.jfif","category"=>"topwear","rating"=>"4.2 ★","reviews"=>"980 Reviews"],  
["id"=>3,"name"=>"top","price"=>"₹749","image"=>"topwear3.jfif","category"=>"topwear","rating"=>"3.9 ★","reviews"=>"650 Reviews"],  
["id"=>4,"name"=>"top","price"=>"₹1299","image"=>"topwear4.jfif","category"=>"topwear","rating"=>"4.6 ★","reviews"=>"1500 Reviews"],  
["id"=>5,"name"=>"top","price"=>"₹999","image"=>"topwear5.jfif","category"=>"topwear","rating"=>"4.1 ★","reviews"=>"870 Reviews"],  
["id"=>6,"name"=>"top","price"=>"₹849","image"=>"topwear6.jfif","category"=>"topwear","rating"=>"3.8 ★","reviews"=>"540 Reviews"],  
["id"=>7,"name"=>"top","price"=>"₹1399","image"=>"topwear7.jfif","category"=>"topwear","rating"=>"4.7 ★","reviews"=>"2100 Reviews"],  
["id"=>8,"name"=>"top","price"=>"₹1199","image"=>"topwear8.jfif","category"=>"topwear","rating"=>"4.3 ★","reviews"=>"1100 Reviews"],  
["id"=>9,"name"=>"top","price"=>"₹699","image"=>"topwear9.jfif","category"=>"topwear","rating"=>"3.7 ★","reviews"=>"430 Reviews"],  
["id"=>10,"name"=>"top","price"=>"₹1599","image"=>"topwear10.jfif","category"=>"topwear","rating"=>"4.8 ★","reviews"=>"3200 Reviews"],  
["id"=>11,"name"=>"top","price"=>"₹899","image"=>"topwear11.jfif","category"=>"topwear","rating"=>"4.0 ★","reviews"=>"760 Reviews"],  
["id"=>12,"name"=>"top","price"=>"₹1049","image"=>"topwear12.jfif","category"=>"topwear","rating"=>"4.2 ★","reviews"=>"920 Reviews"],  
["id"=>13,"name"=>"top","price"=>"₹899","image"=>"topwear13.jfif","category"=>"topwear","rating"=>"3.9 ★","reviews"=>"610 Reviews"],  
["id"=>14,"name"=>"top","price"=>"₹1249","image"=>"topwear14.jfif","category"=>"topwear","rating"=>"4.5 ★","reviews"=>"1340 Reviews"],  
["id"=>15,"name"=>"top","price"=>"₹799","image"=>"topwear15.jfif","category"=>"topwear","rating"=>"3.8 ★","reviews"=>"500 Reviews"],  
["id"=>16,"name"=>"top","price"=>"₹1499","image"=>"topwear16.jfif","category"=>"topwear","rating"=>"4.6 ★","reviews"=>"1750 Reviews"],  
["id"=>17,"name"=>"top","price"=>"₹999","image"=>"topwear17.jfif","category"=>"topwear","rating"=>"4.1 ★","reviews"=>"890 Reviews"],
    

    ["id"=>18,"name"=>"pants","price"=>"₹649","image"=>"bwear1.jfif","category"=>"bottomwear","rating"=>"4.1 ★","reviews"=>"980 Reviews"],
["id"=>19,"name"=>"pants","price"=>"₹799","image"=>"bwear2.jfif","category"=>"bottomwear","rating"=>"4.5 ★","reviews"=>"2100 Reviews"],
["id"=>20,"name"=>"pants","price"=>"₹559","image"=>"bwear3.jfif","category"=>"bottomwear","rating"=>"3.9 ★","reviews"=>"740 Reviews"],
["id"=>21,"name"=>"pants","price"=>"₹899","image"=>"bwear4.jfif","category"=>"bottomwear","rating"=>"4.6 ★","reviews"=>"3200 Reviews"],
["id"=>22,"name"=>"pants","price"=>"₹699","image"=>"bwear5.jfif","category"=>"bottomwear","rating"=>"4.2 ★","reviews"=>"1250 Reviews"],
["id"=>23,"name"=>"pants","price"=>"₹749","image"=>"bwear6.jfif","category"=>"bottomwear","rating"=>"4.0 ★","reviews"=>"890 Reviews"],
["id"=>24,"name"=>"pants","price"=>"₹999","image"=>"bwear7.jfif","category"=>"bottomwear","rating"=>"4.7 ★","reviews"=>"4100 Reviews"],
["id"=>25,"name"=>"pants","price"=>"₹829","image"=>"bwear8.jfif","category"=>"bottomwear","rating"=>"4.3 ★","reviews"=>"1500 Reviews"],
["id"=>26,"name"=>"pants","price"=>"₹599","image"=>"bwear9.jfif","category"=>"bottomwear","rating"=>"3.8 ★","reviews"=>"620 Reviews"],
["id"=>27,"name"=>"pants","price"=>"₹1099","image"=>"bwear10.jfif","category"=>"bottomwear","rating"=>"4.8 ★","reviews"=>"5300 Reviews"],
["id"=>28,"name"=>"pants","price"=>"₹679","image"=>"bwear11.jfif","category"=>"bottomwear","rating"=>"4.2 ★","reviews"=>"1180 Reviews"],

["id"=>29,"name"=>"saree","price"=>"₹899","image"=>"saree1.jfif","category"=>"saree","rating"=>"4.6 ★","reviews"=>"18200 Reviews"],
["id"=>30,"name"=>"saree","price"=>"₹749","image"=>"saree2.jfif","category"=>"saree","rating"=>"4.1 ★","reviews"=>"9400 Reviews"],
["id"=>31,"name"=>"saree","price"=>"₹1299","image"=>"saree3.jfif","category"=>"saree","rating"=>"4.8 ★","reviews"=>"25400 Reviews"],
["id"=>32,"name"=>"saree","price"=>"₹999","image"=>"saree4.jfif","category"=>"saree","rating"=>"4.3 ★","reviews"=>"11200 Reviews"],
["id"=>33,"name"=>"saree","price"=>"₹699","image"=>"saree5.jfif","category"=>"saree","rating"=>"4.0 ★","reviews"=>"8600 Reviews"],
["id"=>34,"name"=>"saree","price"=>"₹1599","image"=>"saree6.jfif","category"=>"saree","rating"=>"4.9 ★","reviews"=>"30100 Reviews"],
["id"=>35,"name"=>"saree","price"=>"₹849","image"=>"saree7.jfif","category"=>"saree","rating"=>"4.2 ★","reviews"=>"9700 Reviews"],
["id"=>36,"name"=>"saree","price"=>"₹1099","image"=>"saree8.jfif","category"=>"saree","rating"=>"4.5 ★","reviews"=>"14500 Reviews"],
["id"=>37,"name"=>"saree","price"=>"₹799","image"=>"saree9.jfif","category"=>"saree","rating"=>"4.1 ★","reviews"=>"9100 Reviews"],
["id"=>38,"name"=>"saree","price"=>"₹1399","image"=>"saree10.jfif","category"=>"saree","rating"=>"4.7 ★","reviews"=>"22100 Reviews"],
["id"=>39,"name"=>"saree","price"=>"₹949","image"=>"saree11.jfif","category"=>"saree","rating"=>"4.4 ★","reviews"=>"13100 Reviews"],
["id"=>40,"name"=>"saree","price"=>"₹1199","image"=>"saree12.jfif","category"=>"saree","rating"=>"4.6 ★","reviews"=>"17600 Reviews"],
["id"=>41,"name"=>"saree","price"=>"₹699","image"=>"saree13.jfif","category"=>"saree","rating"=>"3.9 ★","reviews"=>"7800 Reviews"],
["id"=>42,"name"=>"saree","price"=>"₹1699","image"=>"saree14.jfif","category"=>"saree","rating"=>"4.8 ★","reviews"=>"28900 Reviews"],

["id"=>43,"name"=>"choli","price"=>"₹999","image"=>"choli1.jfif","category"=>"traditional","rating"=>"4.3 ★","reviews"=>"1200 Reviews"],
["id"=>44,"name"=>"choli","price"=>"₹1199","image"=>"choli2.jfif","category"=>"traditional","rating"=>"4.6 ★","reviews"=>"2400 Reviews"],
["id"=>45,"name"=>"choli","price"=>"₹899","image"=>"choli3.jfif","category"=>"traditional","rating"=>"4.0 ★","reviews"=>"950 Reviews"],
["id"=>46,"name"=>"choli","price"=>"₹1499","image"=>"choli4.jfif","category"=>"traditional","rating"=>"4.7 ★","reviews"=>"3100 Reviews"],
["id"=>47,"name"=>"choli","price"=>"₹799","image"=>"choli5.jfif","category"=>"traditional","rating"=>"3.8 ★","reviews"=>"670 Reviews"],
["id"=>48,"name"=>"choli","price"=>"₹1299","image"=>"choli6.jfif","category"=>"traditional","rating"=>"4.5 ★","reviews"=>"2100 Reviews"],
["id"=>49,"name"=>"choli","price"=>"₹999","image"=>"choli7.jfif","category"=>"traditional","rating"=>"4.2 ★","reviews"=>"1500 Reviews"],
["id"=>50,"name"=>"choli","price"=>"₹1599","image"=>"choli8.jfif","category"=>"traditional","rating"=>"4.8 ★","reviews"=>"4200 Reviews"],
["id"=>51,"name"=>"choli","price"=>"₹899","image"=>"choli9.jfif","category"=>"traditional","rating"=>"4.1 ★","reviews"=>"1100 Reviews"],
["id"=>52,"name"=>"choli","price"=>"₹1399","image"=>"choli10.jfif","category"=>"traditional","rating"=>"4.6 ★","reviews"=>"2800 Reviews"],
["id"=>53,"name"=>"choli","price"=>"₹1099","image"=>"choli11.jfif","category"=>"traditional","rating"=>"4.3 ★","reviews"=>"1750 Reviews"],

["id"=>54,"name"=>"Western","price"=>"₹2199","image"=>"ds1.jfif","category"=>"westernwear","rating"=>"4.7 ★","reviews"=>"540 Reviews"],
["id"=>55,"name"=>"Western","price"=>"₹1899","image"=>"ds2.jfif","category"=>"westernwear","rating"=>"4.4 ★","reviews"=>"430 Reviews"],
["id"=>56,"name"=>"Western","price"=>"₹2499","image"=>"ds3.jfif","category"=>"westernwear","rating"=>"4.9 ★","reviews"=>"890 Reviews"],
["id"=>57,"name"=>"Western","price"=>"₹1999","image"=>"ds4.jfif","category"=>"westernwear","rating"=>"4.6 ★","reviews"=>"620 Reviews"],
["id"=>58,"name"=>"Western","price"=>"₹2299","image"=>"ds5.jfif","category"=>"westernwear","rating"=>"4.8 ★","reviews"=>"710 Reviews"],
["id"=>59,"name"=>"Western","price"=>"₹1799","image"=>"ds6.jfif","category"=>"westernwear","rating"=>"4.3 ★","reviews"=>"390 Reviews"],
["id"=>60,"name"=>"Western","price"=>"₹2599","image"=>"ds7.jfif","category"=>"westernwear","rating"=>"4.9 ★","reviews"=>"980 Reviews"],
["id"=>61,"name"=>"Western","price"=>"₹2099","image"=>"ds8.jfif","category"=>"westernwear","rating"=>"4.5 ★","reviews"=>"560 Reviews"],
["id"=>62,"name"=>"Western","price"=>"₹1999","image"=>"ds9.jfif","category"=>"westernwear","rating"=>"4.6 ★","reviews"=>"640 Reviews"],
["id"=>63,"name"=>"Western","price"=>"₹2399","image"=>"ds10.jfif","category"=>"westernwear","rating"=>"4.8 ★","reviews"=>"820 Reviews"],
["id"=>64,"name"=>"Western","price"=>"₹1899","image"=>"ds11.jfif","category"=>"westernwear","rating"=>"4.4 ★","reviews"=>"470 Reviews"],
["id"=>65,"name"=>"Western","price"=>"₹2699","image"=>"ds12.jfif","category"=>"westernwear","rating"=>"4.9 ★","reviews"=>"1100 Reviews"],

["id"=>66,"name"=>"kurti","price"=>"₹899","image"=>"kurti1.jfif","category"=>"kurti","rating"=>"4.2 ★","reviews"=>"980 Reviews"],
["id"=>67,"name"=>"kurti","price"=>"₹1199","image"=>"kurti2.jfif","category"=>"kurti","rating"=>"4.6 ★","reviews"=>"2100 Reviews"],
["id"=>68,"name"=>"kurti","price"=>"₹999","image"=>"kurti3.jfif","category"=>"kurti","rating"=>"4.3 ★","reviews"=>"1500 Reviews"],
["id"=>69,"name"=>"kurti","price"=>"₹1399","image"=>"kurti4.jfif","category"=>"kurti","rating"=>"4.7 ★","reviews"=>"3200 Reviews"],
["id"=>70,"name"=>"kurti","price"=>"₹799","image"=>"kurti5.jfif","category"=>"kurti","rating"=>"4.0 ★","reviews"=>"870 Reviews"],
["id"=>71,"name"=>"kurti","price"=>"₹1599","image"=>"kurti6.jfif","category"=>"kurti","rating"=>"4.8 ★","reviews"=>"4100 Reviews"],
["id"=>72,"name"=>"kurti","price"=>"₹1099","image"=>"kurti7.jfif","category"=>"kurti","rating"=>"4.4 ★","reviews"=>"1760 Reviews"],
["id"=>73,"name"=>"kurti","price"=>"₹949","image"=>"kurti8.jfif","category"=>"kurti","rating"=>"4.1 ★","reviews"=>"1120 Reviews"],
["id"=>74,"name"=>"kurti","price"=>"₹1299","image"=>"kurti9.jfif","category"=>"kurti","rating"=>"4.6 ★","reviews"=>"2500 Reviews"],
["id"=>75,"name"=>"kurti","price"=>"₹899","image"=>"kurti10.jfif","category"=>"kurti","rating"=>"4.2 ★","reviews"=>"990 Reviews"],
["id"=>76,"name"=>"kurti","price"=>"₹1499","image"=>"kurti11.jfif","category"=>"kurti","rating"=>"4.7 ★","reviews"=>"3600 Reviews"],
["id"=>77,"name"=>"kurti","price"=>"₹999","image"=>"kurti12.jfif","category"=>"kurti","rating"=>"4.3 ★","reviews"=>"1400 Reviews"],
["id"=>78,"name"=>"kurti","price"=>"₹1699","image"=>"kurti13.jfif","category"=>"kurti","rating"=>"4.9 ★","reviews"=>"5200 Reviews"],
["id"=>79,"name"=>"kurti","price"=>"₹1199","image"=>"kurti14.jfif","category"=>"kurti","rating"=>"4.5 ★","reviews"=>"2300 Reviews"],
["id"=>80,"name"=>"kurti","price"=>"₹899","image"=>"kurti15.jfif","category"=>"kurti","rating"=>"4.1 ★","reviews"=>"1050 Reviews"],
["id"=>81,"name"=>"kurti","price"=>"₹1399","image"=>"kurti16.jfif","category"=>"kurti","rating"=>"4.6 ★","reviews"=>"3100 Reviews"],
["id"=>82,"name"=>"kurti","price"=>"₹1099","image"=>"kurti17.jfif","category"=>"kurti","rating"=>"4.4 ★","reviews"=>"1880 Reviews"],
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

<!-- HERO -->
<section class="sub-hero">
    <h1>Women's Collection</h1>
    <p>Style that defines you</p>
</section>

<!-- CATEGORY -->
<section class="women-section">
    <div class="category-grid">
        <div class="category-card"><a href="women.php?category=topwear">topwear</a></div>
        <div class="category-card"><a href="women.php?category=bottomwear">bottomwear</a></div>
        <div class="category-card"><a href="women.php?category=saree">saree</a></div>
        <div class="category-card"><a href="women.php?category=traditional">traditional</a></div>
        <div class="category-card"><a href="women.php?category=westernwear">westernwear</a></div>
        <div class="category-card"><a href="women.php?category=kurti">kurti</a></div>
        <div class="category-card"><a href="women.php">All</a></div>
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
    <input type="hidden" name="redirect_page" value="women.php">
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
