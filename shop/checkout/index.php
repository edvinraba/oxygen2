<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (!isset($_SESSION['username'])) {
    echo "<script>alert('You need to click any size')</script>";
    header('location: ../index.php');
    exit;
}

$user = $_SESSION['username'];


try {
    $pdo = new PDO('mysql:host=localhost;dbname=oxygen', 'root', '');

    if (isset($_POST['placeorder'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $method = $_POST['method'];
        $total = $_SESSION['totali'];

        $produkti = array();

        // Verifikimi nëse ka produkte në shportë
        $stmt = $pdo->prepare("SELECT COUNT(*) as count FROM cart");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $product_count = $row['count'];

        if ($product_count > 0) {
            try {
                $stmt = $pdo->prepare("SELECT * FROM cart");
                $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                $stmt2 = $pdo->prepare("SELECT * FROM orders");
                $stmt2->execute();
                $results2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

                foreach ($results2 as $row2) {
                    $data = $row2['data'];
                }

                foreach ($results as $row) {
                    $product = $row['productName'] . "(" . $row['quantity'] . ")" . $row['size'];
                    $produkti[] = $product;
                    $imgProduct = $row['productImg'];
                    $emriproduktit = $row['productName'];
                    $sasia = $row['quantity'];
                    $qmimi = $row['productPrice'];
                    $size = $row['size'];

                }
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }

            $produkti_string = implode(', ', $produkti);

            $order_date = date('F d, Y');

            $stmt = $pdo->prepare("INSERT INTO orders (user, name, email, phone, address, paymode, products, total) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$user, $name, $email, $phone, $address, $method, $produkti_string, $total]);

            $data = '';

            $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'oxygenedvin@gmail.com';
    $mail->Password = 'izjvozlesptztfsc';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('oxygenedvin@gmail.com', 'OXYGEN'); 
    $mail->addAddress($email);
    $mail->addReplyTo($email);

    $mail->isHTML(true);
    $mail->Subject = 'OXYGEN';
    $mail->Body = "
<html>
<head>

    <title>Mesazhi i ri</title>
    <style>
        .main2 {
            width: 500px;
            height: auto;
            margin: 0 auto;
        }
        .top {
            width: 100%;
            height: 15%;
            display: grid;
            place-items: center;
        }
        .btm {
            width: 100%;
            height: 85%;
            border: 1px solid #353535;
            border-radius: 5px;
            overflow: hidden;
        }
        .btm .t {
            width: 100%;
            height: 110px;
            background-color: #353535;
            color: white;
            font-size: 37px;
            font-family: 'teko', sans-serif;
            letter-spacing: 1px;
            padding: 32px;
        }
        .btm .b {
            width: 88%;
            font-size: 15px;
            font-family: 'Source Code Pro', monospace;
            height: auto;
            padding: 30px;
        }
        #h {
            margin-bottom: 20px;
        }
        h4 {
            margin-top: 20px;
            font-weight: bold;
            font-size: 19px;
            font-family: sans-serif;
            letter-spacing: 1px;
            color: #353535;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 30px;
        }
        th, td {
            border: 2px solid #d8cdbe;
            padding: 13px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h1{
            letter-spacing: 1px; 
            font-family: 'Google Sans';
        }
    </style>
</head>
<body>
    <div class='main2'>
        <div class='top'>
            <img src='../../img/ox3.png' style='width: 70%;'>
        </div>
        <div class='btm'>
            <div class='t'>
                <p>Thank you for your order!</p>
            </div>
            <div class='b'>
                <p id='h'>Hi $name</p>
                <p id='o'> Your order has been received and is now being processed. Your order details are shown below for your reference.</p>
                <h4>Order #34435 (" . $order_date . ")</h4>
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                    </tr>";
                    $qmimet = array_column($results, 'productPrice');

                    foreach ($produkti as $index => $product) {
                        $mail->Body .= "<tr><td>" . htmlspecialchars($product) . "</td><td>$" . $qmimet[$index] . "</td></tr>";
                    }
                    $mail->Body .= "
                    <tr>
                        <td>Subtotal:</td>
                        <td>" . $total . "</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>" . $address . "</td>
                    </tr>
                    <tr>
                        <td>Payment Method</td>
                        <td>" . $method . "</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>" . $total . "</td>
                    </tr>
                </table>
                <h1>OXYGEN</h1>
            </div>
        </div>
    </div>
</body>
</html>";

   
    try {
        $mail->send();
        echo "<script>alert('Emaili u dërgua me sukses!')</script>";
        echo "<script>window.open('../index.php', '_self')</script>";
    } 
    catch (Exception $e) {
        echo "<script>alert('Emaili nuk u dërgua. Gabimi: {$mail->ErrorInfo}')</script>";
    }

            $delete = $pdo->prepare('DELETE FROM cart');
            $delete->execute();

            echo "
            <script>
                $(document).ready(function() {
                    $('.prodk')
                    .css({ opacity: 1 })
                    .delay(1000)
                    .animate({ opacity: 0 }, 1000);
                });
            </script>";

            $_SESSION['totali'] = '0';

            // $data .= '<div class="text-center" style="display: grid; text-align: center;">
            // 						<h1 class="display-4 mt-2 text-danger">Thank You!</h1>
            // 						<h2 class="text-success">Your Order Placed Successfully!</h2>
            // 						<h4 class="bg-danger text-light rounded p-2">Items Purchased : ' . $product . '</h4>
            // 						<h4>Your Name : ' . $name . '</h4>
            // 						<h4>Your E-mail : ' . $email . '</h4>
            // 						<h4>Your Phone : ' . $phone . '</h4>
            // 						<h4>Total Amount Paid : ' .  $total . '</h4>
            // 						<h4>Payment Mode : ' . $method . '</h4>
            // 				  </div>';
            // echo $data;

            // header('location: ../shop.php');
        } 
        else {
            echo "<script>alert('You need to add products to your cart before placing an order.')</script>";
        }

    }
} catch (PDOException $e) {
    echo 'Connection failed: ' .$e->getMessage();
}
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="shortcut icon" type="x-icon" href="../../img/logo2.png">
    <title>OXYGEN | SHOP | CHECKOUT</title>
</head>
<body>
    <style>
        .design{
            overflow: hidden;
        }
        @media (max-width: 540px){
            .main {
                width: 100%;
            }
        }
        .main{
            width: 35%;
            height: auto;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .top{
            width: 100%;
            height: 15%;
            display: grid;
            place-items: center;
        }
        .btm{
            width: 100%;
            height: 85%;
            border: 1px solid #d8cdbe;;
            border-radius: 5px;
            overflow: hidden;
        }
        .btm .t{
           width: 100%;
           height: 20%;
           background-color: #353535;
           color: white;
           font-size: 37px;
           font-family: 'teko', sans-serif;
           letter-spacing: 1px;
           padding: 32px;
        }
        .btm .b{
           width: 100%;
           font-size: 15px;
           font-family: 'Source Code Pro', monospace;
           height: 80%;
           padding: 30px;
        }
        #h{
            margin-bottom: 20px;
        }

    </style>
    <div class="main">
        <h2>Complete your order!</h2>
        <div class="products">
        <?php
            $products_text = "";

            try {
                $stmt = $pdo->prepare("SELECT * FROM cart");
                $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($results as $row) {
                    $product_text = "<b>Product</b>: " . $row['productName'] . ", <b>Price:</b> $" . $row['productPrice'] . ", <b>Quantity:</b> " . $row['quantity'] . ", <b>Size:</b> " . $row['size'] . "<br>";
                    $products_text .= $product_text;
                }
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
            echo $products_text;
        ?>
        <h4>Total: <?php echo isset($_SESSION['totali']) ? $_SESSION['totali'] : '0'; ?>$</h4>

        </div>
        <form action="index.php" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="number" name="phone" placeholder="Your Number" required>
            <input type="text" name="address" placeholder="Your Address" required>
            <select name="method" id="method" required>
                <option value="" selected disabled>Select paymode</option>
                <option value="Cash">Cash</option>
            </select>
            <button name="placeorder" type="submit">Place Order</button>
        </form>

    </div>
    <div class="design">
        <h1 id="b">OXYGEN CHECKOUT</h1>
        <h1 id="z">OXYGEN CHECKOUT</h1>
        <h1 id="b">OXYGEN CHECKOUT</h1>
        <h1 id="z">OXYGEN CHECKOUT</h1>
        <h1 id="b">OXYGEN CHECKOUT</h1>
        <h1 id="z">OXYGEN CHECKOUT</h1>
    </div>
</body>
</html>
