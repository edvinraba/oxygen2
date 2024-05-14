<?php
    session_start();
?>
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
        @media (max-width: 984px){
            nav #ul1 {
                margin-left: 34%;
            }
        }
.success-icon {
    color: #4CAF50;
    font-size: 36px;
    margin-bottom: 20px;
}
.success-message {
    font-size: 18px;
    color: #333;
    text-align: center;
    margin-bottom: 10px;
}
.prodk {
    font-family: Arial, sans-serif;
    display: grid;
    justify-content: center;
    align-items: center;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    opacity: 0;
    left: 33%;
    width: max-content;
    position: fixed;
    top: 19%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    z-index: 0;
}
        
        .main{
            height: auto;
            margin-bottom: 60px;
        }
        select{
            width: max-content;
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
        nav ul {
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
@media (max-width: 640px){
    nav #ul2 {
        margin-left: 45%;
    }
}
        nav #ul2 p{
            padding: 10px;
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
    .main .dsn .left{
        overflow: hidden;
    }
    .main .dsn .left .imgdiv {
        overflow: hidden;
    }
    body{
        padding: 10px;
    }
}
@media (max-width: 570px){
    .prodk{
        padding: 8px;
        width: 83%;
    }
    .prodk img{
        width: 35px;
    }
    .success-message {
    font-size: 15px;
}

}
    </style>
   <nav>   
        <a href="../index.php">
            <img src="../img/oxygen.png" id="logo">
        </a>
        <ul id="ul1">
            <li><a href="../index.php" id="l1" class="lii">H<span>o</span><span>m</span><span>e</span></a></li>
            <li><a href="../shop/index.php" id="l2" class="lii">S<span>h</span><span>o</span><span>p</span></a></li>
            <li><a href="../about/index.php" id="l3" class="lii">A<span>b</span><span>o</span><span>u</span><span>t</span></a></li>
            <li><a href="../contact/index.php" id="l4">C<span>o</span><span>n</span><span>t</span><span>a</span><span>c</span><span>t</span></a></li>
        </ul>
        <a href="./cart.php" id="bag" title="Shporta"><ion-icon name="bag-outline" style="width: 27px; height: 27px; margin-top: 31px;"></ion-icon></a>
        <ion-icon name="person-outline" id="user"></ion-icon>
        <a id="menu"><i class="fa-solid fa-bars fa-xl" style="color: #353535;"></i></a>
        <ul id="ul2">
            <p><?php if(isset($_SESSION['username'])){
                echo $_SESSION['username'];
                echo 
                '<a href="../login/edit.php">
                    <p>Edit</p>
                </a>';
                echo 
                '<a href="logout.php">
                    <p>Log Out</p>
                </a>';
            }
            else{
                echo 'Not logged in';
                echo 
                '<a href="../login/index.php">
                    <p>Log in</p>
                </a>';
            }
            ?></p>
        </ul>
    </nav>
    <div class="prodk">
        <img src="../img/Animation - 1712608717195.gif" style="width: 45px; margin: 0 auto;margin-bottom: 10px;">
        <p class="success-message">Produkti është futur me sukses në shportë, faleminderit!</p>
    </div>
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

           $productName = $row['productName'];
           $productPrice = $row['productPrice'];
           $fileUpload = $row['img'];
           $category = $row['category'];

           if(isset($_POST['addtocart'])){
            
            if(isset($_SESSION['username'])){
                $quantity = $_POST['quantity'];
                $size = $_POST['size'];
                $totalPrice = $productPrice * $quantity;
                $user = $_SESSION['username'];

                $insert_query = "INSERT INTO cart (user, productName, productPrice, productImg, quantity , size, totalPrice) 
                                 VALUES (:user, :productName, :productPrice, :fileUpload, :quantity , :size, :totalPrice)";
                if(!isset($size)){
                    echo "<script>alert('You need to click any size')</script>";
                }
                else{
                    $stmt = $pdo->prepare($insert_query);
                    $stmt->bindParam(':user', $user);
                    $stmt->bindParam(':productName', $productName);
                    $stmt->bindParam(':productPrice', $productPrice);
                    $stmt->bindParam(':fileUpload', $fileUpload);
                    $stmt->bindParam(':quantity', $quantity);
                    $stmt->bindParam(':size', $size);
                    $stmt->bindParam(':totalPrice', $totalPrice);
                    $stmt->execute();
                    echo "
                    <script>
                        $(document).ready(function() {
                            $('.prodk')
                            .css({ opacity: 1, zIndex: 999 })
                            .delay(1000)
                            .animate({ opacity: 0, zIndex: 0 }, 1000);
                        });
                    </script>";
                    
                }
            } 
            else{
                echo "<script>alert('You need login first')</script>";
            }
        }
           ?>
        <form method="post">
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
                    <?php
                    if($category == 'Jeans'){
                        echo " 
                        <select name='size'>
                        <option value='' selected disabled>Select Number</option>
                        <option value='30'>30</option>
                        <option value='32'>32</option>
                        <option value='34'>34</option>
                        <option value='36'>36</option>
                        <option value='38'>38</option>
                        <option value='40'>40</option>
                        </select>";
                    } 
                    else 
                    {
                        echo " 
                        <select name='size'>
                        <option value='' selected disabled>Select Size</option>
                        <option value='S'>S</option>
                        <option value='M'>M</option>
                        <option value='L'>L</option>
                        <option value='XL'>XL</option>
                        <option value='XXL'>XXL</option>
                        </select>";   
                    }
                    ?>


                   
                    <br><br>
                    <p id="p2" style="margin-top: 0;">Quantity:</p>
                    <input type="number" name="quantity" id="quantity" min="1" value="1">
                    <br>
                    <button id="a1" name="addtocart" type="submit" >Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
    </form>  
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
