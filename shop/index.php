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
    <title>OXYGEN | Shop</title>
</head>
<body>
    <style>
        a{
            text-decoration: none;
            color: black;
        }
        #menu{
            margin-top: 36px;
        }
    </style>
    <?php
        include("../nav.php");
    ?>
    <div class="prodk">
        <img src="../img/Animation - 1712608717195.gif" style="width: 45px; margin: 0 auto;margin-bottom: 10px;" alt="">
        <p class="success-message">Produkti është futur me sukses në shportë, faleminderit!</p>
    </div>
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
    <div class="design">
        <div class="main">
            <div class="txt">
                <p>SHOP OUR</p>
                <h2>PRODUCTS</h2>
                <button id="scrollButton">View all products</button>
            </div>
            <div class="des">
                <img src="../img/graph.png" id="shape">
                <img src="../img/design.png" id="des2">
            </div>
        </div>
    </div>
    <script>
        document.querySelector('#scrollButton').addEventListener('click', function() {
            var divToScroll = document.querySelector('.category-wrapper');
            divToScroll.scrollIntoView({ behavior: 'smooth' });
        });
    </script>
    <div class="categories-container">
    <?php 
    try {
    $pdo = new PDO('mysql:host=localhost;dbname=oxygen', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $select = "SELECT * FROM products";
    $stmt = $pdo->query($select);

    $categories = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $category = $row['category'];
        $fileId = $row['id'];
        $productName = $row['productName'];
        $productPrice = $row['productPrice'];
        $fileUpload = $row['img'];

        $categories[$category][] = $row;
    }

    foreach ($categories as $category => $products) {
        echo '<div class="category-wrapper">';
    
        echo '<div class="category-name">';
        echo '<h3 class="category-title">' . htmlspecialchars($category) . '</h3>';
        echo '<div class="border">';
        echo '</div>';
        echo '</div>';
        
        echo '<div class="product-category">';

        foreach ($products as $product) {
            $productName = $product['productName'];
            $productPrice = $product['productPrice'];
            $fileUpload = $product['img'];
            $fileId = $product['id'];
            echo '<a href="produkti.php?id=' . $fileId . '">';
echo '<div class="product">';
echo '<div class="imgdiv">';
echo '<img src="../File/' . htmlspecialchars($fileUpload) . '" alt="' . htmlspecialchars($productName) . '" class="product-image">';
echo '</div>';
echo '<p class="product-title">' . htmlspecialchars($productName) . '</p>';
echo '<p class="product-price">' . htmlspecialchars($productPrice) . " $ " . '</p>';
echo '</div>';
echo '</a>';

        }
        
        
        echo '</div>';
        echo '</div>';
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>     
    </div>
    <?php
        include('../footer.php');
    ?>
</body>
</html>

   