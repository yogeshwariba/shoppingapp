<?php include("includes/header.php"); ?>

<?php
$category = isset($_GET['category']) ? $_GET['category'] : 'all';

$products = [
["id"=>1,"name"=>"top","price"=>"₹899","image"=>"topwear1.jfif","category"=>"Women","rating"=>"4.4 ★","reviews"=>"1200 Reviews"],
    ["id"=>2,"name"=>"top","price"=>"₹999","image"=>"topwear2.jfif","category"=>"Women","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    ["id"=>3,"name"=>"top","price"=>"₹999","image"=>"topwear3.jfif","category"=>"Women","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    ["id"=>4,"name"=>"top","price"=>"₹999","image"=>"topwear4.jfif","category"=>"Women","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    ["id"=>5,"name"=>"top","price"=>"₹999","image"=>"topwear5.jfif","category"=>"Women","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    ["id"=>6,"name"=>"top","price"=>"₹999","image"=>"topwear6.jfif","category"=>"Women","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    ["id"=>7,"name"=>"top","price"=>"₹999","image"=>"topwear7.jfif","category"=>"Women","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    ["id"=>8,"name"=>"top","price"=>"₹999","image"=>"topwear8.jfif","category"=>"Women","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    ["id"=>9,"name"=>"top","price"=>"₹999","image"=>"topwear9.jfif","category"=>"Women","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    ["id"=>10,"name"=>"top","price"=>"₹999","image"=>"topwear10.jfif","category"=>"Women","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    ["id"=>11,"name"=>"top","price"=>"₹999","image"=>"topwear11.jfif","category"=>"Women","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    ["id"=>12,"name"=>"top","price"=>"₹999","image"=>"topwear12.jfif","category"=>"Women","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    ["id"=>13,"name"=>"top","price"=>"₹999","image"=>"topwear13.jfif","category"=>"Women","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    ["id"=>14,"name"=>"top","price"=>"₹999","image"=>"topwear14.jfif","category"=>"Women","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    ["id"=>15,"name"=>"top","price"=>"₹999","image"=>"topwear15.jfif","category"=>"Women","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    ["id"=>16,"name"=>"top","price"=>"₹999","image"=>"topwear16.jfif","category"=>"Women","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    ["id"=>17,"name"=>"top","price"=>"₹999","image"=>"topwear17.jfif","category"=>"Women","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    

    ["id"=>18,"name"=>"pants","price"=>"₹599","image"=>"bwear1.jfif","category"=>"Women","rating"=>"4.3 ★","reviews"=>"1500 Reviews"],
    ["id"=>19,"name"=>"pants","price"=>"₹599","image"=>"bwear2.jfif","category"=>"Women","rating"=>"4.3 ★","reviews"=>"1500 Reviews"],
    ["id"=>20,"name"=>"pants","price"=>"₹599","image"=>"bwear3.jfif","category"=>"Women","rating"=>"4.3 ★","reviews"=>"1500 Reviews"],
    ["id"=>21,"name"=>"pants","price"=>"₹599","image"=>"bwear4.jfif","category"=>"Women","rating"=>"4.3 ★","reviews"=>"1500 Reviews"],
    ["id"=>22,"name"=>"pants","price"=>"₹599","image"=>"bwear5.jfif","category"=>"Women","rating"=>"4.3 ★","reviews"=>"1500 Reviews"],
    ["id"=>23,"name"=>"pants","price"=>"₹599","image"=>"bwear6.jfif","category"=>"Women","rating"=>"4.3 ★","reviews"=>"1500 Reviews"],
    ["id"=>24,"name"=>"pants","price"=>"₹599","image"=>"bwear7.jfif","category"=>"Women","rating"=>"4.3 ★","reviews"=>"1500 Reviews"],
    ["id"=>25,"name"=>"pants","price"=>"₹599","image"=>"bwear8.jfif","category"=>"Women","rating"=>"4.3 ★","reviews"=>"1500 Reviews"],
    ["id"=>26,"name"=>"pants","price"=>"₹599","image"=>"bwear9.jfif","category"=>"Women","rating"=>"4.3 ★","reviews"=>"1500 Reviews"],
    ["id"=>27,"name"=>"pants","price"=>"₹599","image"=>"bwear10.jfif","category"=>"Women","rating"=>"4.3 ★","reviews"=>"1500 Reviews"],
    ["id"=>28,"name"=>"pants","price"=>"₹599","image"=>"bwear11.jfif","category"=>"Women","rating"=>"4.3 ★","reviews"=>"1500 Reviews"],

    ["id"=>29,"name"=>"saree","price"=>"₹639","image"=>"saree1.jfif","category"=>"Women","rating"=>"4.4 ★","reviews"=>"17127 Reviews"],
    ["id"=>30,"name"=>"saree","price"=>"₹639","image"=>"saree2.jfif","category"=>"Women","rating"=>"4.4 ★","reviews"=>"17127 Reviews"],
    ["id"=>31,"name"=>"saree","price"=>"₹639","image"=>"saree3.jfif","category"=>"Women","rating"=>"4.4 ★","reviews"=>"17127 Reviews"],
    ["id"=>32,"name"=>"saree","price"=>"₹639","image"=>"saree4.jfif","category"=>"Women","rating"=>"4.4 ★","reviews"=>"17127 Reviews"],
    ["id"=>33,"name"=>"saree","price"=>"₹639","image"=>"saree5.jfif","category"=>"Women","rating"=>"4.4 ★","reviews"=>"17127 Reviews"],
    ["id"=>34,"name"=>"saree","price"=>"₹639","image"=>"saree6.jfif","category"=>"Women","rating"=>"4.4 ★","reviews"=>"17127 Reviews"],
    ["id"=>35,"name"=>"saree","price"=>"₹639","image"=>"saree7.jfif","category"=>"Women","rating"=>"4.4 ★","reviews"=>"17127 Reviews"],
    ["id"=>36,"name"=>"saree","price"=>"₹639","image"=>"saree8.jfif","category"=>"Women","rating"=>"4.4 ★","reviews"=>"17127 Reviews"],
    ["id"=>37,"name"=>"saree","price"=>"₹639","image"=>"saree9.jfif","category"=>"Women","rating"=>"4.4 ★","reviews"=>"17127 Reviews"],
    ["id"=>38,"name"=>"saree","price"=>"₹639","image"=>"saree10.jfif","category"=>"Women","rating"=>"4.4 ★","reviews"=>"17127 Reviews"],
    ["id"=>39,"name"=>"saree","price"=>"₹639","image"=>"saree11.jfif","category"=>"Women","rating"=>"4.4 ★","reviews"=>"17127 Reviews"],
    ["id"=>40,"name"=>"saree","price"=>"₹639","image"=>"saree12.jfif","category"=>"Women","rating"=>"4.4 ★","reviews"=>"17127 Reviews"],
    ["id"=>41,"name"=>"saree","price"=>"₹639","image"=>"saree13.jfif","category"=>"Women","rating"=>"4.4 ★","reviews"=>"17127 Reviews"],
    ["id"=>42,"name"=>"saree","price"=>"₹639","image"=>"saree14.jfif","category"=>"Women","rating"=>"4.4 ★","reviews"=>"17127 Reviews"],

    ["id"=>43,"name"=>"choli","price"=>"₹1099","image"=>"choli1.jfif","category"=>"Women","rating"=>"4.2 ★","reviews"=>"890 Reviews"],
    ["id"=>44,"name"=>"choli","price"=>"₹1099","image"=>"choli2.jfif","category"=>"Women","rating"=>"4.2 ★","reviews"=>"890 Reviews"],
    ["id"=>45,"name"=>"choli","price"=>"₹1099","image"=>"choli3.jfif","category"=>"Women","rating"=>"4.2 ★","reviews"=>"890 Reviews"],
    ["id"=>46,"name"=>"choli","price"=>"₹1099","image"=>"choli4.jfif","category"=>"Women","rating"=>"4.2 ★","reviews"=>"890 Reviews"],
    ["id"=>47,"name"=>"choli","price"=>"₹1099","image"=>"choli5.jfif","category"=>"Women","rating"=>"4.2 ★","reviews"=>"890 Reviews"],
    ["id"=>48,"name"=>"choli","price"=>"₹1099","image"=>"choli6.jfif","category"=>"Women","rating"=>"4.2 ★","reviews"=>"890 Reviews"],
    ["id"=>49,"name"=>"choli","price"=>"₹1099","image"=>"choli7.jfif","category"=>"Women","rating"=>"4.2 ★","reviews"=>"890 Reviews"],
    ["id"=>50,"name"=>"choli","price"=>"₹1099","image"=>"choli8.jfif","category"=>"Women","rating"=>"4.2 ★","reviews"=>"890 Reviews"],
    ["id"=>51,"name"=>"choli","price"=>"₹1099","image"=>"choli9.jfif","category"=>"Women","rating"=>"4.2 ★","reviews"=>"890 Reviews"],
    ["id"=>52,"name"=>"choli","price"=>"₹1099","image"=>"choli10.jfif","category"=>"Women","rating"=>"4.2 ★","reviews"=>"890 Reviews"],
    ["id"=>53,"name"=>"choli","price"=>"₹1099","image"=>"choli11.jfif","category"=>"Women","rating"=>"4.2 ★","reviews"=>"890 Reviews"],

    ["id"=>54,"name"=>"Western","price"=>"₹1999","image"=>"ds1.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>55,"name"=>"Western","price"=>"₹1999","image"=>"ds2.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>56,"name"=>"Western","price"=>"₹1999","image"=>"ds3.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>57,"name"=>"Western","price"=>"₹1999","image"=>"ds4.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>58,"name"=>"Western","price"=>"₹1999","image"=>"ds5.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>59,"name"=>"Western","price"=>"₹1999","image"=>"ds6.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>60,"name"=>"Western","price"=>"₹1999","image"=>"ds7.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>61,"name"=>"Western","price"=>"₹1999","image"=>"ds8.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>62,"name"=>"Western","price"=>"₹1999","image"=>"ds9.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>63,"name"=>"Western","price"=>"₹1999","image"=>"ds10.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>64,"name"=>"Western","price"=>"₹1999","image"=>"ds11.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>65,"name"=>"Western","price"=>"₹1999","image"=>"ds12.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],

    ["id"=>66,"name"=>"kurti","price"=>"₹1999","image"=>"kurti1.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>67,"name"=>"kurti","price"=>"₹1999","image"=>"kurti2.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>68,"name"=>"kurti","price"=>"₹1999","image"=>"kurti3.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>69,"name"=>"kurti","price"=>"₹1999","image"=>"kurti4.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>70,"name"=>"kurti","price"=>"₹1999","image"=>"kurti5.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>71,"name"=>"kurti","price"=>"₹1999","image"=>"kurti6.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>72,"name"=>"kurti","price"=>"₹1999","image"=>"kurti7.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>73,"name"=>"kurti","price"=>"₹1999","image"=>"kurti8.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>74,"name"=>"kurti","price"=>"₹1999","image"=>"kurti9.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>75,"name"=>"kurti","price"=>"₹1999","image"=>"kurti10.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>76,"name"=>"kurti","price"=>"₹1999","image"=>"kurti11.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>77,"name"=>"kurti","price"=>"₹1999","image"=>"kurti12.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>78,"name"=>"kurti","price"=>"₹1999","image"=>"kurti13.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>79,"name"=>"kurti","price"=>"₹1999","image"=>"kurti14.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>80,"name"=>"kurti","price"=>"₹1999","image"=>"kurti15.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>81,"name"=>"kurti","price"=>"₹1999","image"=>"kurti16.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>82,"name"=>"kurti","price"=>"₹1999","image"=>"kurti17.jfif","category"=>"Women","rating"=>"4.8 ★","reviews"=>"102 Reviews"],

    ["id"=>83,"name"=>"Formal Shirt","price"=>"₹899","image"=>"shirt1.jfif","category"=>"Men","rating"=>"4.4 ★","reviews"=>"1200 Reviews"],
    ["id"=>84,"name"=>"Slim Fit Shirt","price"=>"₹999","image"=>"shirt2.jfif","category"=>"Men","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    ["id"=>85,"name"=>"Slim Fit Shirt","price"=>"₹999","image"=>"shirt3.jfif","category"=>"Men","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    ["id"=>86,"name"=>"Slim Fit Shirt","price"=>"₹999","image"=>"shirt4.jfif","category"=>"Men","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    ["id"=>87,"name"=>"Slim Fit Shirt","price"=>"₹999","image"=>"shirt5.jfif","category"=>"Men","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    ["id"=>88,"name"=>"Slim Fit Shirt","price"=>"₹999","image"=>"shirt6.jfif","category"=>"Men","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    ["id"=>89,"name"=>"Slim Fit Shirt","price"=>"₹999","image"=>"shirt7.jfif","category"=>"Men","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    ["id"=>90,"name"=>"Slim Fit Shirt","price"=>"₹999","image"=>"shirt8.jfif","category"=>"Men","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    ["id"=>91,"name"=>"Slim Fit Shirt","price"=>"₹999","image"=>"shirt9.jfif","category"=>"Men","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    ["id"=>92,"name"=>"Slim Fit Shirt","price"=>"₹999","image"=>"shirt10.jfif","category"=>"Men","rating"=>"4.1 ★","reviews"=>"850 Reviews"],
    

    ["id"=>93,"name"=>"Casual T-Shirt","price"=>"₹599","image"=>"tshirt1.jfif","category"=>"Men","rating"=>"4.3 ★","reviews"=>"1500 Reviews"],
    ["id"=>94,"name"=>"Casual T-Shirt","price"=>"₹599","image"=>"tshirt2.jfif","category"=>"Men","rating"=>"4.3 ★","reviews"=>"1500 Reviews"],
    ["id"=>95,"name"=>"Casual T-Shirt","price"=>"₹599","image"=>"tshirt3.jfif","category"=>"Men","rating"=>"4.3 ★","reviews"=>"1500 Reviews"],
    ["id"=>96,"name"=>"Casual T-Shirt","price"=>"₹599","image"=>"tshirt4.jfif","category"=>"Men","rating"=>"4.3 ★","reviews"=>"1500 Reviews"],
    ["id"=>97,"name"=>"Casual T-Shirt","price"=>"₹599","image"=>"tshirt5.jfif","category"=>"Men","rating"=>"4.3 ★","reviews"=>"1500 Reviews"],
    ["id"=>98,"name"=>"Casual T-Shirt","price"=>"₹599","image"=>"tshirt6.jfif","category"=>"Men","rating"=>"4.3 ★","reviews"=>"1500 Reviews"],
    ["id"=>99,"name"=>"Casual T-Shirt","price"=>"₹599","image"=>"tshirt7.jfif","category"=>"Men","rating"=>"4.3 ★","reviews"=>"1500 Reviews"],


    ["id"=>100,"name"=>"Men Denim Jeans","price"=>"₹639","image"=>"jeans1.jfif","category"=>"Men","rating"=>"4.4 ★","reviews"=>"17127 Reviews"],
    ["id"=>101,"name"=>"Men Denim Jeans","price"=>"₹639","image"=>"jeans2.jfif","category"=>"Men","rating"=>"4.4 ★","reviews"=>"17127 Reviews"],
    ["id"=>102,"name"=>"Men Denim Jeans","price"=>"₹639","image"=>"jeans3.jfif","category"=>"Men","rating"=>"4.4 ★","reviews"=>"17127 Reviews"],
    ["id"=>103,"name"=>"Men Denim Jeans","price"=>"₹639","image"=>"jeans4.jfif","category"=>"Men","rating"=>"4.4 ★","reviews"=>"17127 Reviews"],
    ["id"=>104,"name"=>"Men Denim Jeans","price"=>"₹639","image"=>"jeans5.jfif","category"=>"Men","rating"=>"4.4 ★","reviews"=>"17127 Reviews"],
    ["id"=>105,"name"=>"Men Denim Jeans","price"=>"₹639","image"=>"jeans6.jfif","category"=>"Men","rating"=>"4.4 ★","reviews"=>"17127 Reviews"],
    ["id"=>106,"name"=>"Men Denim Jeans","price"=>"₹639","image"=>"jeans7.jfif","category"=>"Men","rating"=>"4.4 ★","reviews"=>"17127 Reviews"],


    ["id"=>107,"name"=>"Grey Trouser","price"=>"₹1099","image"=>"trouser1.jfif","category"=>"Men","rating"=>"4.2 ★","reviews"=>"890 Reviews"],
    ["id"=>108,"name"=>"Grey Trouser","price"=>"₹1099","image"=>"trouser2.jfif","category"=>"Men","rating"=>"4.2 ★","reviews"=>"890 Reviews"],
    ["id"=>109,"name"=>"Grey Trouser","price"=>"₹1099","image"=>"trouser3.jfif","category"=>"Men","rating"=>"4.2 ★","reviews"=>"890 Reviews"],
    ["id"=>110,"name"=>"Grey Trouser","price"=>"₹1099","image"=>"trouser4.jfif","category"=>"Men","rating"=>"4.2 ★","reviews"=>"890 Reviews"],
    ["id"=>111,"name"=>"Grey Trouser","price"=>"₹1099","image"=>"trouser5.jfif","category"=>"Men","rating"=>"4.2 ★","reviews"=>"890 Reviews"],
    ["id"=>112,"name"=>"Grey Trouser","price"=>"₹1099","image"=>"trouser6.jfif","category"=>"Men","rating"=>"4.2 ★","reviews"=>"890 Reviews"],
    ["id"=>113,"name"=>"Grey Trouser","price"=>"₹1099","image"=>"trouser7.jfif","category"=>"Men","rating"=>"4.2 ★","reviews"=>"890 Reviews"],

    ["id"=>114,"name"=>"Winter Jacket","price"=>"₹1999","image"=>"jacket1.jfif","category"=>"Men","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>115,"name"=>"Winter Jacket","price"=>"₹1999","image"=>"jacket2.jfif","category"=>"Men","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>116,"name"=>"Winter Jacket","price"=>"₹1999","image"=>"jacket3.jfif","category"=>"Men","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>117,"name"=>"Winter Jacket","price"=>"₹1999","image"=>"jacket4.jfif","category"=>"Men","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>118,"name"=>"Winter Jacket","price"=>"₹1999","image"=>"jacket5.jfif","category"=>"Men","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>119,"name"=>"Winter Jacket","price"=>"₹1999","image"=>"jacket6.jfif","category"=>"Men","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>120,"name"=>"Winter Jacket","price"=>"₹1999","image"=>"jacket7.jfif","category"=>"Men","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>121,"name"=>"Winter Jacket","price"=>"₹1999","image"=>"jacket8.jfif","category"=>"Men","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>122,"name"=>"Winter Jacket","price"=>"₹1999","image"=>"jacket9.jfif","category"=>"Men","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>123,"name"=>"Winter Jacket","price"=>"₹1999","image"=>"jacket10.jfif","category"=>"Men","rating"=>"4.8 ★","reviews"=>"102 Reviews"],

    ["id"=>124,"name"=>"kurta","price"=>"₹1999","image"=>"kurta1.jfif","category"=>"Men","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>125,"name"=>"kurta","price"=>"₹1999","image"=>"kurta2.jfif","category"=>"Men","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>126,"name"=>"kurta","price"=>"₹1999","image"=>"kurta3.jfif","category"=>"Men","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>127,"name"=>"kurta","price"=>"₹1999","image"=>"kurta4.jfif","category"=>"Men","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>128,"name"=>"kurta","price"=>"₹1999","image"=>"kurta5.jfif","category"=>"Men","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>129,"name"=>"kurta","price"=>"₹1999","image"=>"kurta7.jfif","category"=>"Men","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>130,"name"=>"kurta","price"=>"₹1999","image"=>"kurta8.jfif","category"=>"Men","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>131,"name"=>"kurta","price"=>"₹1999","image"=>"kurta9.jfif","category"=>"Men","rating"=>"4.8 ★","reviews"=>"102 Reviews"],
    ["id"=>132,"name"=>"kurta","price"=>"₹1999","image"=>"kurta6.jfif","category"=>"Men","rating"=>"4.8 ★","reviews"=>"102 Reviews"],


];
?>

<!-- HERO -->
<section class="sub-hero">
    <h1>All Collection</h1>
    <p>Style that defines you</p>
</section>

<!-- CATEGORY -->
<section class="All-section">
    <div class="category-grid">
        <div class="category-card"><a href="all.php?category=Women">Women</a></div>
        <div class="category-card"><a href="all.php?category=Men">Men</a></div>
        <div class="category-card"><a href="all.php">All</a></div>
    </div>
</section>

<!-- PRODUCTS -->
<section class="products">
    <div class="product-grid">

        <?php foreach($products as $product): ?>
            <?php if($category == 'all' || $product['category'] == $category): ?>

                <div class="product-card">
<form method="POST" action="wishlist.php" class="wishlist-form">
    <input type="hidden" name="name" value="<?php echo $product['name']; ?>">
    <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
    <input type="hidden" name="image" value="<?php echo $product['image']; ?>">
    
    <button type="submit" class="wishlist-btn">❤</button>
</form>



                    <!-- Product Image -->
                    <img src="images/<?php echo $product['image']; ?>" alt="">

                    <h3><?php echo $product['name']; ?></h3>
                    <div class="price"><?php echo $product['price']; ?></div>
                    <div class="delivery">Free Delivery</div>

                    <div class="rating">
                        <span class="rating-box"><?php echo $product['rating']; ?></span>
                        <span class="reviews"><?php echo $product['reviews']; ?></span>
                    </div>

                    <form method="POST" action="cart.php">
    
    <input type="hidden" name="name" value="<?php echo $product['name']; ?>">
    <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
    <input type="hidden" name="image" value="<?php echo $product['image']; ?>">

    <button type="submit" name="add_to_cart">
        Add to Cart
    </button>

</form>


               </div>

            <?php endif; ?>
        <?php endforeach; ?>

    </div>
</section>

<?php include("includes/footer.php"); ?>
