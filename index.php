<?php
session_start();

if(!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
if(!isset($_SESSION['wishlist'])) $_SESSION['wishlist'] = [];

if(isset($_POST['add_to_cart'])){
    $_SESSION['cart'][] = [
        'name'=>$_POST['product_name'],
        'price'=>$_POST['product_price']
    ];
}

if(isset($_POST['buy_now'])){
    $_SESSION['cart'] = [[
        'name'=>$_POST['product_name'],
        'price'=>$_POST['product_price']
    ]];
}

if(isset($_POST['add_to_wishlist'])){
    $_SESSION['wishlist'][] = [
        'name'=>$_POST['product_name'],
        'price'=>$_POST['product_price']
    ];
}

if(isset($_POST['place_order'])){
    $_SESSION['cart'] = [];
    $orderSuccess = true;
}

function total($cart){
    $t = 0;
    foreach($cart as $i){ $t += $i['price']; }
    return $t;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Fashion US One</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
*{box-sizing:border-box}
body{margin:0;font-family:'Segoe UI',sans-serif;background:#fafafa;color:#333}
header{position:fixed;top:0;width:100%;background:#111;color:#fff;padding:15px 30px;display:flex;justify-content:space-between;z-index:1000}
header a{color:#fff;text-decoration:none;margin-left:15px}
.container{max-width:1200px;margin:auto;padding:140px 20px}
section{padding:60px 0}
h2{color:#d81b60;margin-bottom:20px}
.products{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:25px}
.card{background:#fff;border-radius:12px;box-shadow:0 5px 15px rgba(0,0,0,.08);padding:20px;text-align:center}
.card img{width:100%;height:300px;object-fit:cover;border-radius:10px}
.price{color:#d81b60;font-weight:bold;margin:10px 0}
.btn{padding:10px 14px;border:none;border-radius:5px;margin:5px;cursor:pointer}
.cart-btn{background:#d81b60;color:#fff}
.buy-btn{background:#ffb300}
.box{background:#fff;padding:35px;border-radius:12px;box-shadow:0 5px 15px rgba(0,0,0,.08);line-height:1.8}
table{width:100%;border-collapse:collapse}
th,td{padding:10px;border-bottom:1px solid #ddd}
footer{background:#111;color:#fff;text-align:center;padding:30px;margin-top:50px}
.hero{width:100%;border-radius:15px;margin-top:25px}
</style>
<script>
function go(id){ document.getElementById(id).scrollIntoView({behavior:'smooth'}); }
</script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/68a734bc727c171927b3627a/1j36ic8f9';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    <!-- Privacy-friendly analytics by Plausible -->
<script async src="https://plausible.io/js/pa-9o_DgZty9FX6aNe55TcaD.js"></script>
<script>
  window.plausible=window.plausible||function(){(plausible.q=plausible.q||[]).push(arguments)},plausible.init=plausible.init||function(i){plausible.o=i||{}};
  plausible.init()
</script>



    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/69733b1558104b1978d41cb5/1jfl1tjkf';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->








    
</head>
<body>

<header>
<strong onclick="go('home')" style="cursor:pointer;">ShopHaus</strong>
<nav>
<a onclick="go('home')">Home</a>
<a onclick="go('about')">About</a>
<a onclick="go('products')">Shop</a>
<a onclick="go('wishlist')">Wishlist</a>
<a onclick="go('cart')">Cart</a>
<a onclick="go('checkout')">Checkout</a>
<a onclick="go('contact')">Contact</a>
</nav>
</header>

<div class="container">

<!-- HOME -->
<section id="home">
<h2>Modern Fashion for Everyday Confidence</h2>
<p>
Welcome to ShopHaus Fashion — a modern destination for trend-conscious shoppers who believe style is a form of self-expression. Our collections are designed for individuals who appreciate quality, comfort, and contemporary design. Fashion is more than clothing; it is a statement of identity, personality, and creativity. At ShopHaus, we bring together timeless pieces and seasonal trends to help you build a wardrobe that reflects who you truly are.
</p>
<p>
From everyday casualwear to elevated statement outfits, our store is built to inspire confidence and individuality. We carefully curate our collections so that every item you discover here has been selected for quality craftsmanship, stylish design, and lasting comfort. Whether you're heading to work, meeting friends, attending an event, or simply enjoying a relaxed day out, ShopHaus offers versatile styles for every moment of your life.
</p>
<img src="https://images.unsplash.com/photo-1521335629791-ce4aec67dd47" class="hero">

<p>
Fashion evolves constantly, but true style remains timeless. That’s why our design philosophy balances trend-forward aesthetics with classic silhouettes that never go out of fashion. We believe clothing should empower you — making you feel confident, comfortable, and effortlessly stylish. Our mission is to create a seamless online shopping experience where inspiration meets convenience.
</p>
<p>
We are passionate about inclusive fashion. Our collections are designed to celebrate diverse body types, personal tastes, and lifestyles. ShopHaus is not just about what you wear — it’s about how you feel when you wear it. Every garment tells a story, and we’re here to help you tell yours through fashion that fits your life and your personality.
</p>
<p>
Sustainability and responsible sourcing are also central to our vision. We collaborate with suppliers who prioritize ethical production and quality materials. By focusing on durable fabrics and thoughtful design, we aim to reduce fast-fashion waste while delivering pieces you’ll love season after season.
</p>
<p>
At ShopHaus, shopping online should be easy, inspiring, and enjoyable. With smooth navigation, clear product descriptions, and reliable service, we make it simple to discover your next favorite outfit. Stay ahead of trends, build your signature style, and enjoy fashion that moves with you.
</p>
</section>

<!-- ABOUT -->
<section id="about" class="box">
<h2>About ShopHaus</h2>
<p>
ShopHaus Fashion was founded with a simple yet powerful idea: style should be accessible, inspiring, and meaningful. We started as a small team of fashion enthusiasts who believed that online shopping could offer more than just products — it could offer inspiration, confidence, and creativity. Today, ShopHaus has grown into a trusted online fashion store serving customers who value quality and timeless design.
</p>
<p>
Our team includes designers, stylists, and customer experience experts dedicated to bringing you thoughtfully selected collections. We study global trends, emerging designers, and customer feedback to ensure every piece in our store meets our standards for style, comfort, and versatility.
</p>
<p>
We believe fashion is deeply personal. That’s why we focus on versatile clothing that can adapt to different lifestyles and occasions. From minimalist essentials to bold statement pieces, ShopHaus helps you express yourself through clothing that feels authentic and empowering.
</p>
<p>
Customer satisfaction is at the heart of everything we do. We prioritize clear communication, secure checkout, and reliable service. Our goal is not only to sell clothing but to build long-lasting relationships with our customers.
</p>
</section>

<!-- PRODUCTS -->
<section id="products">
<h2>Featured Collection</h2>
<div class="products">

<?php
$items = [
["Classic Beige Coat","https://images.unsplash.com/photo-1512436991641-6745cdb1723f",189],
["Casual Street Hoodie","https://images.unsplash.com/photo-1520975916090-3105956dac38",79],
["Elegant Summer Dress","https://images.unsplash.com/photo-1503342217505-b0a15ec3261c",129],
["Minimal White Sneakers","https://images.unsplash.com/photo-1528701800489-20be3cce26f0",99],
["Denim Jacket","https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f",139],
["Tailored Black Blazer","https://images.unsplash.com/photo-1593032465175-481ac7f401fd",159]
];

foreach($items as $p){
echo "<div class='card'>
<img src='{$p[1]}'>
<h4>{$p[0]}</h4>
<div class='price'>€{$p[2]}</div>
<form method='post'>
<input type='hidden' name='product_name' value='{$p[0]}'>
<input type='hidden' name='product_price' value='{$p[2]}'>
<button name='add_to_cart' class='btn cart-btn'>Add to Cart</button>
<button name='buy_now' class='btn buy-btn'>Buy Now</button>
<button name='add_to_wishlist' class='btn'>Wishlist</button>
</form>
</div>";
}
?>

</div>
</section>

<!-- WISHLIST -->
<section id="wishlist" class="box">
<h2>Your Wishlist</h2>
<?php if(empty($_SESSION['wishlist'])) echo "<p>No saved items yet.</p>"; else { ?>
<table>
<?php foreach($_SESSION['wishlist'] as $w){ ?>
<tr><td><?=htmlspecialchars($w['name'])?></td><td>€<?=$w['price']?></td></tr>
<?php } ?>
</table>
<?php } ?>
</section>

<!-- CART -->
<section id="cart" class="box">
<h2>Your Cart</h2>
<?php if(empty($_SESSION['cart'])) echo "<p>Your cart is empty.</p>"; else { ?>
<table>
<?php foreach($_SESSION['cart'] as $c){ ?>
<tr><td><?=htmlspecialchars($c['name'])?></td><td>€<?=$c['price']?></td></tr>
<?php } ?>
</table>
<h3>Total: €<?=total($_SESSION['cart'])?></h3>
<button onclick="go('checkout')" class="btn cart-btn">Proceed to Checkout</button>
<?php } ?>
</section>

<!-- CHECKOUT -->
<section id="checkout" class="box">
<h2>Checkout</h2>
<?php if(isset($orderSuccess)){ ?>
<p>✅ Thank you! Your order has been placed successfully.</p>
<?php } elseif(empty($_SESSION['cart'])) { ?>
<p>Your cart is empty.</p>
<?php } else { ?>
<form method="post">
<input required placeholder="Full Name"><br><br>
<input required placeholder="Email"><br><br>
<input required placeholder="Shipping Address"><br><br>
<button name="place_order" class="btn cart-btn">Place Order</button>
</form>
<?php } ?>
</section>

<!-- CONTACT -->
<section id="contact" class="box">
<h2>Contact Us</h2>
<p>
Have questions about sizing, orders, or returns? Our support team is always here to help. Reach out anytime and we’ll make sure your shopping experience is smooth and enjoyable.
</p>
<p>Email: support@shophausfashion.com<br>
Phone: +1 234 567 890</p>
</section>

</div>

<footer>
© <?=date("Y")?> ShopHaus Fashion – Style Meets Confidence
</footer>

</body>
</html>
