<?php
    session_start();
?>
<!DOCTYPE php>
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
    <title>OXYGEN | Contact</title>
</head>
<body>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .main{
            height: auto;
        }
        footer{
            height: 180px;
        }
        .main .cf{
    width: 100%;
    height: auto;
    display: flex;
    justify-content: center;
}
.main .cf .inps{
    width: 700px;
    height: auto;
    margin-top: 12px;
    display: flex;
    justify-content: center;
    text-align: center;
}
.main .txt h3{
    font-size: 57px;
    font-family: 'Teko', sans-serif;
    letter-spacing: 3px;    
}
.main .txt .border{
    width: 227px;
    height: 7px;
    background: #d8cdbe;
    border-radius: 17px;
}
.main .txt {
    display: grid;
    place-content: center;
}
    </style>
    <span id="product-count" class="product-count">0</span>
    <?php
        include("../nav.php");
    ?>
    <script>
        $(document).ready(function(){
            $('#menu').click(function(){
                $('nav ul1').slideToggle(250);
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
    <div class="main">
        <div class="txt">
            <h3>CONTACT US</h3>
            <div class="border"></div>
        </div>
        <div class="cus">
            <div class="contact" id="bd1">
                <i class="fa-solid fa-phone fa-2xl" id="icon" style="color: #353535;"></i>
                <h4>PHONE</h4>
                <p>049-388-028</p>
            </div>
            <div class="contact" id="bd2">
                <i class="fa-solid fa-location-dot fa-2xl" id="icon" style="color: #353535;"></i>
                <h4>LOCATION</h4>
                <p>Rr. Nena Tereza Prizren</p>
            </div>
            <div class="contact" id="bd3">
                <i class="fa-solid fa-clock fa-2xl" id="icon" style="color: #353535;"></i>
                <h4>Schedule</h4>
                <p>Monday-Saturday 09-20</p>
                <p>Sunday-Closed</p>
            </div>
            <div class="contact" id="bd4">
                <i class="fa-solid fa-envelope fa-2xl" id="icon" style="color: #353535;"></i>
                <h4>EMAIL</h4>
                <p>oxygen@info.com</p>
            </div>
        </div>
        <div class="cf">
            <div class="inps">
                <form action="submit.php" id="contactForm" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Your Name"  id="name" title="Your Surname" required>
                    <input type="email" name="email" id="email" placeholder="Your Email"  id="email" title="Your Email" required>
                    <textarea name="message" rows="6" placeholder="Your Message..." id="message" title="Your Message" required></textarea>
                    <button type="submit" name="submit" class="btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php
        include("../footer.php");
    ?>
</body>
</html>