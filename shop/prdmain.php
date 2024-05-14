<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styleprd.css">
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
</head>
<body>
    <style>
        .main{
            height: auto;
            margin-bottom: 60px;
        }
    </style>
    <nav>  
        <a href="../index.html">
            <img src="../img/oxygen.png" id="logo">
        </a>
        <ul id="ul1">
            <li><a href="../index.html" id="l1" class="lii">H<span>o</span><span>m</span><span>e</span></a></li>
            <li><a href="index.php" id="l2" class="lii">S<span>h</span><span>o</span><span>p</span></a></li>
            <li><a href="../about/about.html" id="l3" class="lii">A<span>b</span><span>o</span><span>u</span><span>t</span></a></li>
            <li><a href="../contact/contact.html" id="l4">C<span>o</span><span>n</span><span>t</span><span>a</span><span>c</span><span>t</span></a></li>
        </ul>
        <a href="cart.php" id="bag" title="Shporta"><ion-icon name="bag-outline" style="width: 27px; height: 27px; margin-top: 31px;"></ion-icon></a>
        <a  id="menu"><i class="fa-solid fa-bars fa-xl" style="color: #353535;"></i></a>
        <section class="cart" style="display: none;">
            <h2 class="cart-title">Shporta</h2>
            <p id="cart-message" style="margin-bottom: 10px;">Nuk keni asgje ne shport!</p>
            <ul id="cart-items" class="cart-items">
               
            </ul>
            <p class="total-price" name="productPrice" style="margin-top: 10px;">Total: $<span id="total-amount">0</span></p>
            <button id="btncart">Buy now</button>  
        </section>
    </nav>
    <div class="prodk">
        <img src="../img/Animation - 1712608717195.gif" style="width: 45px; margin: 0 auto;margin-bottom: 10px;" alt="">
        <p class="success-message">Produkti është futur me sukses në shportë, faleminderit!</p>
    </div>
    <script>
    $(document).ready(function() {
        $('#a1').click(function() {
            $('.prodk')
            .animate({ top: '2%' }, 1000) 
            .delay(1000) 
            .animate({ top: '-300px' }, 1000);
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('.add-to-cart').click(function() {
            $('.prodk')
            .animate({ top: '2%' }, 1000) 
            .delay(1000) 
            .animate({ top: '-300px' }, 1000);
        });
    });
    </script>
    <script>
        $(document).ready(function(){
            $('#menu').click(function(){
                $('nav ul').slideToggle(250);
                $(this).toggleClass("active");
                $(this).find('i').toggleClass("fa-bars fa-times");
            });
        });
        </script>
        <?php
        
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#addtocart').click(function() {
        var quantity2 = $('#quantity').val(); // Merr vlerën e quantity nga inputi i numrit
        $.ajax({
            type: "POST",
            url: "process.php",
            data: { quantity: quantity2 },
            success: function(response) {
                alert(response); // Trego përgjigjen nga serveri (nëse është e nevojshme)
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText); // Trego gabimin nëse ka ndonjë problem
            }
        });
    });
});
</script>

    <?php
    
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=oxygen','root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        if(isset($_GET['id'])){
            $id = $_GET['id'];

           $select = "SELECT * FROM products WHERE id=:id";
           $stmt = $pdo->prepare($select);
           $stmt->bindParam(':id',$id);
           $stmt->execute();
           $row = $stmt->fetch(PDO::FETCH_ASSOC);

           $fileId = $row['id'];
           $productName = $row['productName'];
           $productPrice = $row['productPrice'];
           $fileUpload = $row['img'];
           $quantity = $_POST['quantity'];
           $totalPrice = $productPrice * $quantity;
           $category = $row['category'];

            $insert_query = "INSERT INTO cart (productName, productPrice, productImg, quantity , totalPrice) 
                         VALUES (:productName, :productPrice, :fileUpload, :quantity , :totalPrice)";
        $stmt = $pdo->prepare($insert_query);
        $stmt->bindParam(':productName', $productName);
        $stmt->bindParam(':productPrice', $productPrice);
        $stmt->bindParam(':fileUpload', $fileUpload);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->bindParam(':totalPrice', $totalPrice);
        $stmt->execute();
           ?>
        <div class="main">
        <div class="dsn">
            <div class="left">
                <div class="imgdiv">
                    <img class="product-image" src="../File/<?php echo $fileUpload; ?>">
                </div>
            </div>
            <div class="right">
                <div class="txt">
                    <p id="p1">HOME<span>/</span><?php echo $category ?></p>
                    <h3 name="productName" ><?php echo $productName ?></h3>

                    <h5 class="product-price">Price: <?php echo $productPrice ?>$</h5>
                    <p id="p2">Size:</p>
                    <select name="size" id="size">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    </select>
                    <br><br>
                    <p id="p2" style="margin-top: 0;">Quantity:</p>
                    <input type="number" name="quantity" id="quantity" class="qty" min="1" value="1">
                    <br>
                    <button id="a1" name="addtocart" type="submit" >Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
            
           <?php
       }
   }

   catch (PDOException $e) {
       echo 'Connection failed: ' . $e->getMessage();
   }
   
?>
    <?php
        include('../footer.php');
    ?>
</body>
</html>
