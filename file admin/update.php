<?php
session_start();

try {
    $pdo = new PDO('mysql:host=localhost;dbname=oxygen', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_GET['update'])){
        $update_id = $_GET['update'];
        $select = "SELECT * FROM products WHERE id=:id";
        $stmt = $pdo->prepare($select);
        $stmt->bindParam(':id', $update_id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>

<head>
    <title> Update </title>
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
        textarea {
            width: calc(100% - 20px);
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="file"] {
            margin-bottom: 10px;
        }

        img {
            display: block;
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
    </style>
</head>

<body>
    <form method='post' action="update_ID.php" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        Product Name:<br>
        <input type="text" name="productName" value="<?php echo $row['productName'];?>"><br>
        Product Image:<br>
        <input type="file" name="fileUpload">
        <img src="./file/<?php echo $row['img'];?>" width="150" height="150"><br>
        Product Price:<br>
        <textarea name="productPrice" cols="30" rows="2"><?php echo $row['productPrice'];?></textarea><br>
        <input type="submit" name="update" value="Update" id="a1">
    </form>
</body>
<?php
        include("./updatedesign.php");
    ?>
</html>
<?php 
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
