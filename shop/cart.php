<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="cartstyle.css">
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
    <title>OXYGEN | Cart</title>
</head>
<body>
    <style>
        footer{
            padding: 30px 30px 0px 30px;
        }
    .cart-container {
        margin-top: 100px;
    }
    .cart-container h2 {
        text-align: center;
        font-family: 'Teko', sans-serif;
        font-size: 45px;
    }
    a{
        color: black;
    }
    body {
        padding: 0px;
    }
    #pc{
        right: 53px;
    }
    @media (max-width: 480px){
        .cart-container {
            padding: 3px;
        }
        .cart-row {
            padding: 20px 0;
            font-size: 14px;
        }
        .cart-price, 
        .cart-quantity-input, 
        .cart-size-input, 
        .cart-total-price {
            font-size: 14px;
        }
        .cart-column img{
            width: auto;
            background-color: transparent;
            margin-right: 0;
        }
    }
    @media (max-width: 600px){
        .cart-container h2 {
            margin-top: -30px;
        }
    }
    </style>
    <?php
        include("../nav.php");    
    ?>
    <?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=oxygen', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("SELECT * FROM cart WHERE user = '{$_SESSION['username']}'");
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <?php
        if(isset($_POST['clearcart'])){
            $delete = $pdo->prepare("DELETE FROM cart WHERE user = '{$_SESSION['username']}'");
            $delete->execute();
        }
    ?>
    <?php
    $con = new PDO('mysql:host=localhost;dbname=oxygen', 'root', '');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['remove'])) {
        $id = $_GET['remove'];

        $delete = $con->prepare("DELETE FROM cart WHERE id=:id and user = '{$_SESSION['username']}'");
        $delete->bindParam(':id', $id);
        $delete->execute();
    }
?>

    <div class="cart-container">
        <h2>Your Shopping Cart</h2>
        <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
        <a href="./index.php">
            <p style="font-family: teko, 'sans-serif'; position: absolute; font-size: 26px; top: 220px; background: none;border: none; cursor: pointer;">Countinue shopping</p>
        </a>
        <input type="submit" id="pc" style="font-family: teko, 'sans-serif'; position: absolute; font-size: 26px; top: 220px; background: none;border: none; cursor: pointer;" name="clearcart" value="Clear cart">
    </form>
        <div class="cart-table" style="margin-top: 80px;">
        <div class="cart-row cart-header">
            <div class="cart-column">Product</div>
            <div class="cart-column">Price</div>
            <div class="cart-column">Quantity</div>
            <div class="cart-column">Size</div>
            <div class="cart-column">Total</div>
            <div class="cart-column">Remove</div>
        </div>
            <?php foreach ($results as $row): 
?>
            <div class="cart-row">
                <div class="cart-column">
                    <img class="cart-item-image" src="../File/<?php echo $row['productImg']; ?>" height="80px" alt="<?php echo $row['productName']; ?>"><br>
                    <span class="cart-item-title" style="margin-left: -20px;"><?php echo $row['productName']; ?></span>
                </div>
                <div class="cart-column">
                    <span class="cart-price">$<?php echo $row['productPrice']; ?></span>
                </div>
                <div class="cart-column">
                    <span class="cart-quantity-input"><?php echo $row['quantity']; ?></span>
                </div>
                <div class="cart-column">
                    <span class="cart-size-input"><?php echo $row['size']; ?></span>
                </div>
                <div class="cart-column">
                    <span class="cart-total-price">$<?php echo $row['productPrice'] * $row['quantity']; ?></span>
                </div>
                <form action="post"></form>
                <div class="cart-column">
                <a href="cart.php?remove=<?= $row['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');"><i class="fas fa-trash-alt"></i></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="cart-summary">
            <p>Total Items: <span class="total-items"><?php echo count($results); ?></span></p>
            <?php
            $totalPrice = array_reduce($results, function($carry, $row) {
                return $carry + ($row['productPrice'] * $row['quantity']);
            }, 0);
            ?>
            <p>Total Price: $<span class="total-price"><?php echo $totalPrice; ?></span></p>
            <?php
            if(isset($totalPrice)){
                $_SESSION['totali'] = $totalPrice;
            }
            ?>
            <a href="./checkout/index.php">
                <button class="checkout-btn" id="a1" >Checkout</button>
            </a>
        </div>
    </div>
    <?php
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    include("../footer.php");
    ?>

</body>
</html>