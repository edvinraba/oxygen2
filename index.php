<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/style.css">
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
    <link rel="stylesheet" type="text/css" href="path-to-your-ionic-icons/css/ionicons.min.css">
    <link rel="shortcut icon" type="x-icon" href="./img/logo2.png">
    <title>OXYGEN | Home</title>
</head>
<body>
    <style>
    .product {
        transition: 0.5s;
    }
    .product:hover img {
        scale: 0.96;
        transition: 0.5s;
    }
    .product:hover {
        scale: 0.96;
        transition: 0.5s;
    }
    nav #user{
    position: absolute;
    left: 84%;
    cursor: pointer;
    width: 27px;
    height: 27px;
    z-index: 99;
    margin-top: 31px;
}
nav ul{
list-style: none;
display: flex;
margin: 0 auto;
margin-top: 10px;
}
nav #ul2 {
    position: absolute;
    display: none;
    font-size: 16px;
    margin-top: 90px;
    margin-left: 59%;
    padding-top: 15px;
    width: 200px;
    height: auto;
    background: whitesmoke;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}
nav #ul2 p{
    padding: 10px;
}
#menu{
    margin-top: 36px;
}
        a{
            text-decoration: none;
            color: black;
        }
        @media (max-width: 984px){
            nav ul {
                margin-left: 34%;
            }
        }
        @media (max-width: 875px){
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
nav #menu{
    left: 77%;
}
@media (max-width: 414px){
    nav #logo{
        left: -24px;
        width: 245px;
        position: absolute;
    }
    @keyframes logoanm{
    from{
        width: 0;
    }
    to{
        width: 245px;
    }}
    nav #menu {
        left: 72%;
    }
    nav #user {
    left: 81%;}

}
@media (max-width: 640px){
    nav #ul2 {
        margin-left: 45%;
    }
}
.second .right #productss{
    transition: 0.5s;
}
.second .right #productss:hover{
    scale: 0.96;
    transition: 0.5s;
}
.second .right #productss:hover img{
    scale: 0.96;
    transition: 0.5s;
}
.second .left{
    transition: 0.5s;
}
.second .left:hover{
    scale: 0.96;
    transition: 0.5s;
}
.second .left:hover img{
    scale: 0.96;
    transition: 0.5s;
}
.text{
    width: 100%;
    height: 100px;
    display: grid;
    place-content: center;
    font-size: 57px;
    font-family: 'Teko', sans-serif;
    letter-spacing: 3px;
    margin-bottom: 25px;
}
.border{
    width: 532px;
    height: 7px;
    background: #d8cdbe;
    border-radius: 17px;
    margin-top: -12px;
}
.second .right .top:hover{
    scale: none;
    transition: 0.5s;
}
@media (max-width: 615px){
    .text {
        font-size: 39px;
    }
    .border {
        width: 384px;
    }
}
@media (max-width: 420px){
    .text {
        font-size: 29px;
    }
    .border {
        width: 300px;
        margin-top: -3px;
    }
}
@media (max-width: 350px){
    .text {
        font-size: 24px;
    }
    .border {
        width: 257px;
        margin-top: 0px;
    }
}
    </style>
    <nav>
        <a href="">
            <img src="./img/oxygen.png" id="logo">
        </a>
        <ul id="ul1">
            <li><a href="" id="l1" class="lii">H<span>o</span><span>m</span><span>e</span></a></li>
            <li><a href="./shop/index.php" id="l2" class="lii">S<span>h</span><span>o</span><span>p</span></a></li>
            <li><a href="./about/index.php" id="l3" class="lii">A<span>b</span><span>o</span><span>u</span><span>t</span></a></li>
            <li><a href="./contact/index.php" id="l4">C<span>o</span><span>n</span><span>t</span><span>a</span><span>c</span><span>t</span></a></li>
        </ul>
        <a href="./shop/cart.php" id="bag" title="Shporta"><ion-icon name="bag-outline" style="width: 27px; height: 27px; margin-top: 31px;"></ion-icon></a>
        <ion-icon name="person-outline" id="user"></ion-icon>
        <ul id="ul2">
            <p><?php if(isset($_SESSION['username'])){
                echo $_SESSION['username'];
                echo 
                '<a href="login/edit.php">
                    <p>Edit</p>
                </a>';
                echo 
                '<a href="shop/logout.php">
                    <p>Log Out</p>
                </a>';
            }
            else{
                echo 'Not logged in';
                echo 
                "<a href='./login/index.php'>
                    <p>Log in</p>
                </a>";
            }
            ?></p>
        </ul>
        <a id="menu"><i class="fa-solid fa-bars fa-xl" style="color: #353535;"></i></a>
    </nav>
    <script>
        $(document).ready(function(){
            $('#user').click(function(){
                $('#ul2').slideToggle(250);
            });
        });
    </script>
    <script>
    $(document).ready(function(){
        $('#menu').click(function(){
            $('nav #ul1').slideToggle(250);
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
            <p id="p1">Your New</p>
            <h1 id="h1">Hoo</h1>
            <img src="./img/hoodie1.png" id="hoodd" width="100px" height="122px" style="display: none;" class="imgs">
            <img src="./img/hoodie1.png" id="hood">
            <h1 id="h2">die.</h1>
            <p id="p2">For Winter</p>
            <div class="images">
                <img src="./img/hoodie2.png" id="hood2" class="imgs"> 
                <img src="./img/hoodie3.png" id="hood3" class="imgs">
                <img src="./img/hoodie4.png" id="hood4" class="imgs">
                <img src="./img/hoodie5.png" id="hood5" class="imgs">
                <img src="./img/hoodie6.png" id="hood6" class="imgs">
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.imgs').click(function() {
                var imgSrc = $(this).attr('src');
                $('#hood').attr('src', imgSrc);
                var div = $('.images');
                var imgs = $('#hoodd');

                if ($(window).width() > 615) {
                    imgs.css({
                        display: 'block',
                        width: '90px',
                        height: '114px'
                    });
                    div.css({
                        width: '530px'
                    });
                    imgs.appendTo('.images');
                }
            });
        });
    </script>
    <div class="newarr">
        <div class="div">
            <h2>featured</h2>
        </div>
        <h1>NEW ARRIVALS</h1>
        <h1>NEW ARRIVALS</h1>
        <h1>NEW ARRIVALS</h1>
    </div>
    <div class="products">
        <a href="./shop/produkti.php?id=28">
        <div class="product" id="product-1">
            <div class="imgdiv">
                <img src="./img/product1.png" alt="Produkti 1" class="product-image">
            </div>
            <p class="product-title">T-Shirt</p>
            <p class="product-price">15$</p>
        </div>
        </a>

        <a href="./shop/produkti.php?id=31">
        <div class="product" id="product-2">
            <div class="imgdiv">
                <img src="./img/product2.png" alt="Produkti 1" class="product-image">
            </div>
            <p class="product-title">Jacket Nasa</p>
            <p class="product-price">55$</p>
        </div>
        </a>

        <a href="./shop/produkti.php?id=11">
        <div class="product" id="product-3">
            <div class="imgdiv">
                <img src="./img/product15.png" alt="Produkti 3" class="product-image">
            </div>
            <p class="product-title">Jeans</p>
            <p class="product-price">18$</p>
        </div>
        </a>

        <a href="./shop/produkti.php?id=22">
        <div class="product" id="product-4">
            <div class="imgdiv">
                <img src="./img/product4.png" alt="Produkti 4" class="product-image">
            </div>
            <p class="product-title">Hoodie</p>
            <p class="product-price">30$</p>
        </div>
        </a>

        <a href="./shop/produkti.php?id=13">
        <div class="product" id="product-5">
            <div class="imgdiv">
                <img src="./img/product7.png" alt="Produkti 5" class="product-image">
            </div>
            <p class="product-title">Vest</p>
            <p class="product-price">25$</p>
        </div>
        </a>

        <a href="./shop/produkti.php?id=15">
        <div class="product" id="product-6">
            <div class="imgdiv">
                <img src="./img/product36.png" alt="Produkti 1" class="product-image">
            </div>
            <p class="product-title">Socks</p>
            <p class="product-price">25$</p>
        </div>
        </a>

    </div>
    <div class="firm">
        <img src="./img/lacoste.png" id="lac" class="brands">
        <img src="./img/ck.png" id="ck" class="brands">
        <img src="./img/diesel.png" id="dsl" class="brands">
        <img src="./img/tommy.png" id="tomy" class="brands">
        <img src="./img/boss.png" id="boss" class="brands">
    </div>
    <div class="cm">
        <h4>Client Comments</h4>
        <img src="./img/client.webp" class="clnt">
        <p id="p2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>
        <p id="p1">John Doe</p>
    </div>
    <div class="text">
        <h3>Recommended Products</h3>
        <div class="border"></div>
    </div>
    <div class="second">
        <div class="left">
        <a href="./shop/produkti.php?id=40">
            <div class="imgdiv">
                <img src="./img/product6.png" alt="Produkti 6" class="product-image">
            </div>
            <p class="product-title">Vest</p>
            <p class="product-price">35$</p>
        </a>
        </div>
        <div class="right">
            <div class="top">
                <div class="produkt1" id="productss">
                <a href="./shop/produkti.php?id=13">
                    <div class="imgdiv">
                        <img src="./img/product7.png" alt="Produkti 7" class="product-image">
                    </div>
                    <p class="product-title">Vest</p>
                    <p class="product-price">35$</p>
                </a>
                </div>
                <div class="produkt2" id="productss">
                <a href="./shop/produkti.php?id=25">
                    <div class="imgdiv">
                        <img src="./img/product14.png" alt="Produkti 8" class="product-image">
                    </div>
                    <p class="product-title">Jacket</p>
                    <p class="product-price">55$</p>
                </a>
                </div>
                <div class="produkt3" id="productss">
                <a href="./shop/produkti.php?id=32">
                    <div class="imgdiv">
                        <img src="./img/product3.png" alt="Produkti 8" class="product-image">
                    </div>
                    <p class="product-title">Jeans</p>
                    <p class="product-price">25$</p>
                </a>
                </div>
            </div>
            <div class="bottom">
                <div class="produkt4" id="productss">
                <a href="./shop/produkti.php?id=34">
                    <div class="imgdiv">
                        <img src="./img/product16.png" alt="Produkti 7" class="product-image">
                    </div>
                    <p class="product-title">Hat</p>
                    <p class="product-price">20$</p>
                </a>
                </div>
                <div class="produkt5" id="productss">
                <a href="./shop/produkti.php?id=41">
                    <div class="imgdiv">
                        <img src="./img/product23.png" alt="Produkti 7" class="product-image">
                    </div>
                    <p class="product-title">T-Shirt</p>
                    <p class="product-price">25$</p>
                </a>
                </div>
                <div class="produkt6" id="productss">
                <a href="./shop/produkti.php?id=39">
                    <div class="imgdiv">
                        <img src="./img/product22.png" alt="Produkti 7" class="product-image">
                    </div>
                    <p class="product-title">Hoodie</p>
                    <p class="product-price">30$</p>
                </a>
                </div>
            </div>
        </div>
    </div>
    <div class="view">
        <a href="./shop/index.php">
            <button>View all products...</button>
        </a>
    </div>
    <footer>
        <div class="top">
            <img src="./img/oxygen.png" >
        </div>
        <div class="bottom">
            <div class="first">
                <h4>COMPANY</h4>
                <p>About</p>
                <p>Features</p>
                <p>Works</p>
                <p>Privacy</p>
            </div>
            <div class="first">
                <h4>FAQ</h4>
                <p>Account</p>
                <p>Deliveries</p>
                <p>Orders</p>
                <p>Payments</p>
            </div>
            <div class="third">
                <h4>RESOURCES</h4>
                <p>Youtube Playlist</p>
                <p>Development Tutorials</p>
                <p>Free eBooks</p>
            </div>
            <div class="social">
                <h4>SOCIAL</h4>
                <div class="flex">
                    <a href="https://www.instagram.com/edvinraba/" target="_blank">
                        <div class="scl">
                            <i class="fa-brands fa-instagram fa-xl"></i>
                        </div>
                    </a>
                    <a href="https://www.facebook.com/edvinraba/" target="_blank">
                        <div class="scl">
                            <i class="fa-brands fa-facebook fa-xl"></i>
                        </div>
                    </a>
                    <a href="https://web.snapchat.com/" target="_blank">
                        <div class="scl">
                            <i class="fa-brands fa-snapchat fa-xl"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </footer>
   
     <!-- <script>
        $(document).ready(function() {
            $('.add-to-cart').click(function() {
                $('.prodk')
                .animate({ opacity: 1 }, 1000)
                .delay(1000)
                .animate({ opacity: 0 }, 1000);
            });
        });
        </script> -->
</body>
</html>