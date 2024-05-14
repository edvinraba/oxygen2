<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="shortcut icon" type="x-icon" href="../img/logo2.png">
    <title>OXYGEN | Shop</title>
    <title>View Insert</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        ::-webkit-scrollbar{
    width: 10px;
}
::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(#353535);
}
::-webkit-scrollbar-thumb {
    background: linear-gradient(#353535, #353535);
    border-radius: 10px;
}
::-webkit-scrollbar-track {
    background:#f5f5f5;
}
        body{
            
            padding: 30px;
        }
        .category-wrapper .product-category {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
            grid-gap: 20px;
            margin-top: 45px
        }
        .category-name{
            display: grid;
            text-align: center;
            justify-content: center;
        }
        .category-name h3{
            font-size: 40px;
            font-family: 'Teko', sans-serif;
            letter-spacing: 1px;
        }
        .border{
            width: 146px;
            height: 7px;
            background: #d8cdbe;
            border-radius: 17px;
        }
.product {
    text-align: center;
    height: 341px;
    font-size: 18px;
}
.product img{
    transition: 0.5s;
    width: 200px;
    height: 250px;
}
.product .imgdiv{
    width: 100%;
    border-radius: 6px;
    height: 265px;
    background-color: #e1e1e1;
    display: flex;
    justify-content: center;
}
.product p{
    font-size: 23px;
    font-family: 'Teko', sans-serif;
    display: block;
    text-align: left;
    letter-spacing: 1px;
    margin-left: 5px;
}
.product:hover img{
    scale: 1.06;
    transition: 0.5s;
}
.product button{
    padding: 9px;
    border: 0;
    border-radius: 14px;
    position: relative;
    top: -46px;
    text-align: center;
    left: 37%;
    cursor: pointer;
    transition: 0.3s;
}
.product button:hover{
    scale: 1.10;
    transition: 0.3s;
}
@media (max-width: 982px){
    .design .main .txt {
        left: 4%;
    }
}
@media (max-width: 919px){
    .design .main .txt h2{
        letter-spacing: 6px;
    }
    .design .main .des{
        left: 18px;
    }
}
@media (max-width: 889px){
    .design .main .des #shape{
        width: 164%;
    }
    .design .main .txt {
        left: -6%;
        z-index: 2;
    }
}
@media (max-width: 984px){
    nav ul {
        margin-left: 34%;
    }
}

@media (max-width:850px){
    nav #bag {
        left: 94%;
    }
}
/*  */
@media (max-width: 823px){
    nav #bag {
        left: 91%;
    }
    nav #logo{
        left: -9px;
    }
    nav #ul1 {
        list-style: none;
        display: none;
        font-size: 16px;
        margin-top: 81px;
        margin-left: 0;
        width: 100%;
        height: 365px;
        background: whitesmoke;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }
    nav #ul1 li {
        padding: 33px;
    }
    nav #menu{
        display: block;
        cursor: pointer;
    }
}
@media (max-width: 800px){
    .design .main #h1 {
        font-size: 120px;
        top: 228px;
        left: -128px;
    }
    .design .main #p1 {
        top: 240px;
        left: -47px;
        font-size: 23px;
    }
    .design .main #h2 {
        font-size: 120px;
        top: 228px;
        left: -35px;
    }
    .design .main #p2 {
        top: 348px;
        right: -41px;
        font-size: 23px;
    }
    .design .main #hood {
        width: 350px;
        height: 480px;
    }
}
@media (max-width: 768px){
    .design .main .des #shape{
        display: none;
    }
    .design .main .des #des2 {
        left: -485px;
    }
    .design .main .txt {
        left: 41%;
    }
}

@media (max-width:685px){
    .design .main #p1 {
        top: 236px;
        left: -13px;
        font-size: 21px;
    }
    .design .main #h1 {
        font-size: 102px;
        top: 228px;
        left: -89px;
        letter-spacing: 4px;
    }
    .design .main #hood {
        width: 319px;
        height: 447px;
        margin-top: 16px;
    }
    .design .main #h2 {
        font-size: 102px;
        top: 228px;
        left: -33px;
        letter-spacing: 4px;
    }
    .design .main #p2 {
        top: 327px;
        right: -14px;
        font-size: 21px;
        height: 0;
        letter-spacing: 1px;
    }
}
@media (max-width: 680px){
    .design .main .des #des2 {
        left: -460px;
    }
}
@media (max-width: 589px){
    .design {
        height: 529px;
    }
    .design .main .des #des2 {
        left: -381px;
        height: 478px;
    }
    .design .main .txt {
        left: 52%;
    }
    .design .main .txt p {
        font-size: 48px;
        font-family: 'Teko', sans-serif;
        letter-spacing: 0px;
        font-weight: unset;
    }
    .design .main .txt h2 {
        letter-spacing: 1px;
        font-size: 40px;
    }
    .design button{
        padding-left: 25px;
        padding-right: 25px;
    }
}
@media (max-width: 546px){
    .design .main .txt {
        left: 42%;
    }
    .design .main .des #des2 {
        left: -371px;
    }
}
@media (max-width: 563px){
    .design .main #hood {
        width: 289px;
        height: 418px;
        margin-top: 53px;
    }
    .design .main #p1 {
        top: 245px;
        left: -5px;
        font-size: 19px;
        letter-spacing: 1px;
    }
    .design .main #h1 {
        font-size: 85px;
        top: 241px;
        left: -69px;
        letter-spacing: 2px;
    }
    .design .main #h2 {
        font-size: 85px;
        top: 242px;
        left: -28px;
        letter-spacing: 2px;
    }
    .design .main #p2 {
        top: 327px;
        right: 0px;
        font-size: 19px;
        letter-spacing: 1px;
    }
}
@media (max-width: 535px){
    nav #menu {
        left: 82%;
    }
}
@media (max-width: 519px){
    .design .main .images {
        width: 102%;
    }
    .design .main .images .imgs {
        width: 20%;
        height: 105px;
    }
}
@media (max-width: 489px){
    body{
        padding: 15px;
        padding-bottom: 0;
    }
    .cart{
        margin-right: 0;
    }
    .design .main #p1 {
        top: 245px;
        left: 0px;
        font-size: 18px;
        letter-spacing: 1px;
    }
    .design .main #h1 {
        font-size: 79px;
        top: 241px;
        left: -60px;
        letter-spacing: 1px;
    }
    .design .main #hood {
        width: 272px;
        height: 393px;
        margin-top: 64px;
    }
    .design .main #h2 {
        font-size: 79px;
        top: 242px;
        left: -28px;
        letter-spacing: 2px;
    }
    .design .main #p2 {
        top: 318px;
        right: 0px;
        font-size: 18px;
        height: 0;
        letter-spacing: 1px;
    }
}
@media (max-width: 460px){
    .design {
        height: 508px;
    }
    .design .main .txt {
        left: 51%;
    }
    .design .main .txt p {
        font-size: 43px;
    }
    .design .main .txt h2 {
        letter-spacing: 1px;
        font-size: 34px;
    }
    .design button {
        padding-left: 15px;
        padding-right: 15px;
    }
    .design .main .des #des2 {
        left: -330px;
        height: 457px;
    }
}
@media (max-width:435px){
    .design .main #p1 {
        top: 247px;
        left: -6px;
        font-size: 17px;
        letter-spacing: 0px;
    }
    .cart {
        width: 94%;
    }
    .design .main #h1 {
        font-size: 72px;
        top: 245px;
        left: -56px;
        letter-spacing: 1px;
    }
    .design .main #hood {
        width: 63%;
        height: 55%;
        margin-top: 92px;
    }
    .design .main #h2 {
        font-size: 72px;
        top: 242px;
        left: -28px;
        letter-spacing: 2px;
    }
    .design .main #p2 {
        top: 312px;
        right: -1px;
        font-size: 17px;
        height: 0;
        letter-spacing: 0;
    }
}
@media (max-width: 431px){
    .design .main .txt {
        left: 45%;
    }
}
@media (max-width: 411px){
    .design {
        height: 439px;
    }
    .design .main .txt p {
        font-size: 38px;
    }
    .design .main .txt h2 {
        letter-spacing: 1px;
        font-size: 30px;
    }
    .design button {
        width: 183px;
        padding: 12px;
        font-size: 14px;
    }
    .design .main .des #des2 {
        left: -304px;
        height: 388px;
    }
}

@media (max-width: 371px){
    .design .main .txt {
        left: 40%;
        z-index: 5;
    }
}
    </style>
</head>
<body>
<nav>   
        <a href="../index.html">
            <img src="./img/oxygen.png" id="logo">
        </a>
        <ul id="ul1">
            <li><a href="../index.html" id="l1" class="lii">H<span>o</span><span>m</span><span>e</span></a></li>
            <li><a href=" " id="l2" class="lii">S<span>h</span><span>o</span><span>p</span></a></li>
            <li><a href="../about/about.html" id="l3" class="lii">A<span>b</span><span>o</span><span>u</span><span>t</span></a></li>
            <li><a href="../contact/contact.html" id="l4">C<span>o</span><span>n</span><span>t</span><span>a</span><span>c</span><span>t</span></a></li>
        </ul>
        <a  id="bag" title="Shporta"><ion-icon name="bag-outline" style="width: 27px; height: 27px; margin-top: 31px;"></ion-icon></a>
        <a  id="menu"><i class="fa-solid fa-bars fa-xl" style="color: #353535;"></i></a>
        <section class="cart" style="display: none;">
            <h2 class="cart-title">Shporta</h2>
            <p id="cart-message" style="margin-bottom: 10px;">Nuk keni asgje ne shport!</p>
            <ul id="cart-items" class="cart-items">
               
            </ul>
            <p class="total-price" style="margin-top: 10px;">Total: $<span id="total-amount">0</span></p>  
        </section>
    </nav>
    <script>
        $(document).ready(function(){
            $('#menu').click(function(){
                $('nav ul').slideToggle(250);
                $(this).toggleClass("active");
                $(this).find('i').toggleClass("fa-bars fa-times");
            });
        });
        </script>
    <script>
        $(document).ready(function(){
            $('.cart ul').after("<hr></hr>")
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#bag').click(function(){
                $('.cart').slideToggle(250);
            });
        });
    </script>
    <div class="design">
        <div class="main">
            <div class="txt">
                <p>SHOP OUR</p>
                <h2>PRODUCTS</h2>
                <button id="scrollButton">View all products</button>
            </div>
            <div class="des">
                <img src="./img/graph.png" id="shape">
                <img src="./img/design.png" id="des2">
            </div>
        </div>
    </div>
    <!-- Div kryesor për mbajtjen e kategorive -->
    <div class="categories-container">
        <?php 
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=oxygen', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $select = "SELECT * FROM products";
            $stmt = $pdo->query($select);

            // Array për të mbajtur produktet të grupuara sipas kategorive
            $categories = [];

            // Shto produktet në array sipas kategorisë
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $category = $row['category'];

                // Shto produktin në kategorinë përkatëse
                $categories[$category][] = $row;
            }

            // Shfaq kategoritë dhe produktet
            foreach ($categories as $category => $products) {
                // Div i ri për mbajtjen e kategorisë dhe produkteve
                echo '<div class="category-wrapper">';
                
                // Shfaq emrin e kategorisë jashtë `products`
                echo '<div class="category-name">';
                echo '<h3 class="category-title">' . htmlspecialchars($category) . '</h3>';
                echo '<div class="border">';
                echo '</div>';
                echo '</div>';
                
                // Div për mbajtjen e produkteve brenda kategorisë
                echo '<div class="product-category">';

                // Shfaq produktet brenda kategorisë
                foreach ($products as $product) {
                    $productName = $product['productName'];
                    $productPrice = $product['productPrice'];
                    $fileUpload = $product['img'];

                    echo '<div class="product">';
                    echo '<div class="imgdiv">';
                    echo '<img src="File/' . htmlspecialchars($fileUpload) . '" alt="' . htmlspecialchars($productName) . '">';
                    echo '</div>';
                    echo '<p class="product-title">' . htmlspecialchars($productName) . '</p>';
                    echo '<p class="product-price">' . htmlspecialchars($productPrice) . " $ " . '</p>';
                    echo '<button class="add-to-cart"><i class="fa-solid fa-cart-plus fa-xl" style="color: #353535";></i></button>';
                    echo '</div>';
                }

                // Mbyllja e div-it `product-category`
                echo '</div>';

                // Mbyllja e div-it `category-wrapper`
                echo '</div>';
            }
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        ?>
    </div>
</body>
</html>
