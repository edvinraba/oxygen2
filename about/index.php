<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
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
    <title>OXYGEN | About</title>
</head>
<body>
    <span id="product-count" class="product-count">0</span>
   <?php
        include("../nav.php");
   ?>
    
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
        <div class="bck"></div>
        <h2>About Us</h2>
        <p>Our Company</p>
    </div>
    <div class="main">
        <div class="h">
            <h3>OUR STORY</h3>
            <p> At OXYGEN, we take pride in delivering an exceptional shopping experience to you. 
                As one of the leaders in the technology market, 
                we offer a wide range of the latest and innovative products in every category, 
                ranging from smartphones and laptops to smart devices and the latest accessories.
            </p>
        </div>
        <div class="second">
            <div class="dsn">
                <div class="txt">
                    <h3>OUR VISION</h3>
                    <p>Our vision at OXYGEN is to create a shopping environment that exceeds our customers' expectations.
                        We see a world where technology and innovation help transform the way people shop
                        and benefit from online products and services.
                    </p>
                    <br><br>
                    <p> We aim to be leaders in the e-commerce market by offering a range of
                        wide range of high quality products and providing a great shopping experience
                        unimaginable.
                    </p>
                </div>
                <div class="imgdiv"></div>
            </div>
            <div class="dsn">
                <div class="imgdiv" style="background: url(../img/team4.jpg); background-repeat: no-repeat; background-size: 100% 100%;"></div>
                <div class="txt ndryshe">
                    <h3>OUR APPROCH</h3>
                    <p>We at E-ShopTech see our customers as partners on the road to success. 
                        Our approach to the customer is to be committed to them in an unparalleled way. We listen to their needs.
                    </p>
                    <br><br>
                    <p>Every step of the way, we prevail to ensure that our customers feel the value of our service. 
                        By providing an easy and convenient shopping experience.
                    </p>
                </div>
            </div>
            <div class="dsn">
                <div class="txt">
                    <h3>OUR PROCESS</h3>
                    <p>Our process begins with an in-depth market research and recognition of customer needs. 
                        Based on these, we select the most suitable and high quality products to offer on our platform. 
                    </p>
                    <br><br>
                    <p>Stock management, order processing and product distribution are important parts of our operational process. 
                        We ensure that all products are available, delivered on time and in suitable condition.
                    </p>
                </div>
                <div class="imgdiv" style="background: url(../img/team5.jpg); background-repeat: no-repeat; background-size: 100% 100%;"></div>
            </div>
        </div>
    </div>
    <?php
        include("../footer.php");
    ?>
</body>
</html>