<!DOCTYPE html>
<html>

<head>
    <title> Update </title>
    <link rel="shortcut icon" type="x-icon" href="../../img/logo2.png">
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
        input {
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
    <?php
    session_start();

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=oxygen', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(isset($_GET['update'])){
            $update_id = $_GET['update'];
            $select = "SELECT * FROM users WHERE id=:id";
            $stmt = $pdo->prepare($select);
            $stmt->bindParam(':id', $update_id);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
    <form method='post' action="update_ID.php" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        Name:<br>
        <input type="text" name="username" value="<?php echo $row['username'];?>"><br>
        Email:
        <input name="email" value="<?php echo $row['email'];?>"><br>
        Phone:
        <input name="phone" value="<?php echo $row['number'];?>"><br>
        <input type="submit" name="update" value="Update" id="a1">
    </form>
    <?php
            include("../view/updatedesign.php");
        }
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    ?>
</body>

</html>
