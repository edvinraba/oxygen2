<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Insertimi i produkteve</title>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertimi i produkteve</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        form {
            width: 50%;
            margin: 120px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 99;
        }

        input[type="text"],
        input[type="file"],
        input[type="number"],
        textarea {
            width: calc(100% - 20px);
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #f9f9f9;
        }
        option {
            padding: 15px;
        }
        #a1{
            background-color: #353535;
            color: white;
            padding: 11px 45px;
            border-radius: 58px;
            border: 1px solid #353535;
            font-size: 14px;
            letter-spacing: 2px;
            font-family: 'Teko', sans-serif;
            transition: all .3s;
            cursor: pointer;
        }
        #a1:hover{
            color: #353535;
            transition: 0.3s;
            scale: 1.06;
            background-color: white;
        }
        #a2{
            background-color: white;
            color: #353535;
            padding: 11px 45px;
            margin-left: 25px;
            border-radius: 58px;
            font-size: 14px;
            border: 1px solid #353535;
            letter-spacing: 2px;
            font-family: 'Teko', sans-serif;
            transition: all .3s;
            cursor: pointer;
        }
        #a2:hover{
           
            color: white;
            transition: 0.3s;
            scale: 1.06;
            background-color: #353535;
        }
    </style>
</head>
    <form method="post" action="insert.php" enctype="multipart/form-data">
        <label for="fileUpload">Product image:</label><br>
        <input type="file" name="fileUpload" id="fileUpload"><br><br>

        <label for="productName">Product Name:</label><br>
        <input type="text" name="productName" id="productName"><br><br>

        <label for="Price">Product price:</label><br>
        <input type="number" name="Price" id="Price" min="1"><br><br>

        <label for="category">Product category:</label><br>
        <select name="category" id="category">
            <option value="">Select category</option>
            <option value="T-Shirt">T-Shirt</option>
            <option value="Jeans">Jeans</option>
            <option value="Jacket">Jacket</option>
            <option value="Hat">Hat</option>
            <option value="Socks">Socks</option>
            <option value="Hoodie">Hoodie</option>
            <option value="Vest">Vest</option>
            <option value="Shirt">Shirt</option>
            <option value="Shoes">Shoes</option>
        </select><br><br>

        <input type="submit" name="upload" value="Insert" id="a1">
        <input type="reset" name="cancel" value="Cancel" id="a2">
    </form>
    <?php
        include("./insertdesign.php");
    ?>
    <?php
    
    try{
        $pdo = new PDO ('mysql:host=localhost;dbname=oxygen','root','');

    if(isset($_POST['upload'])){
        $productName = $_POST['productName'];
        $productPrice = $_POST['Price'];
        $category = $_POST['category'];

        $fileUpload = $_FILES['fileUpload']['name'];
        $fileUpload_tmp = $_FILES['fileUpload']['tmp_name'];

        if($productName == '' or $fileUpload == ''){
            echo "<script>alert('Inputet jane te zbrazura');</script>";
        }
        else
        {
            $select = "SELECT * FROM products WHERE productName=:productName OR img=:fileUpload LIMIT 1";
            $stmt = $pdo->prepare($select);
            $stmt->bindParam(':productName',$productName);
            $stmt->bindParam(':fileUpload',$fileUpload);
            $stmt->execute();
            $exist = $stmt->fetch(PDO::FETCH_ASSOC);

            if($exist){
                echo "<script>alert('Ky produkt egziston!');</script>";
            }
            else{
                move_uploaded_file($fileUpload_tmp, "File/$fileUpload");

                $uploadFile = "INSERT INTO products (productName, img, productPrice, category)
                               VALUES (:productName, :fileUpload, :productPrice, :category)";
                $stmt = $pdo->prepare($uploadFile);
                $stmt->bindParam(':productName',$productName);
                $stmt->bindParam(':fileUpload',$fileUpload);
                $stmt->bindParam(':productPrice',$productPrice);
                $stmt->bindParam(':category',$category);

                if ($stmt->execute()) {
                    echo "<script>alert('Insertimi eshte bere me sukese');</script>";
                } else {
                    echo "<script>alert('Upload Failed!');</script>";
                }
            }
        }
    }
}
catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>

</body>
</html>
