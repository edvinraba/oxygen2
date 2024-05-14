<?php

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
   $quantity = $_POST['quantity'];
   $size = $_POST['size'];
   $totalPrice = $productPrice * $quantity;
   $category = $row['category'];
   
   $insert_query = "INSERT INTO cart (productName, productPrice, productImg, quantity , size, totalPrice) 
                    VALUES (:productName, :productPrice, :fileUpload, :quantity , :size, :totalPrice)";
                    
    $stmt = $pdo->prepare($insert_query);
    $stmt->bindParam(':productName', $productName);
    $stmt->bindParam(':productPrice', $productPrice);
    $stmt->bindParam(':fileUpload', $fileUpload);
    $stmt->bindParam(':quantity', $quantity);
    $stmt->bindParam(':size', $size);
    $stmt->bindParam(':totalPrice', $totalPrice);
    $stmt->execute();
}
?>
