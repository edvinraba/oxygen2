<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="dstyle.css">
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
    <link rel="stylesheet" type="text/css" href="path-to-your-ionic-icons/css/ionicons.min.css">
    <link rel="shortcut icon" type="x-icon" href="../../img/logo2.png">
    <title>OXYGEN | Admin | Dashboard</title>
<head>
    <title>View Insert</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            font-family: sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            /* border: 1px solid #dddddd; */
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #353535;
            color: white;
            border: none;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        a{
            text-decoration: none;
            transition: 0.7s;
            color: #353535;
        }
        nav a:hover{
            scale: 1.04;
            transition: 0.7s;
        }
        nav{
            width: 100%;
            height: 90px;
            background-color:#f5f5f5;
            text-align: center;
        }
        nav h1{
            font-size: 70px;
            font-family: 'Teko', sans-serif;
            letter-spacing: 5px;
        }

        #a1{
            background-color: #353535;
            color: white;
            padding: 11px 45px;
            border-radius: 58px;
            border: 1px solid #353535;
            font-size: 14px;
            letter-spacing: 2px;
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

<body>
    <nav>
        <a href="../index.php">
            <h1>OXYGEN DASHBOARD</h1>
        </a>
    </nav>
    <table>
        <tr>
            <th>Id</th>
            <th>Product Name</th>
            <th>Product image</th>
            <th>Price</th>
            <th>Update File</th>
            <th>Delete</th>
        </tr>
        <?php 
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=oxygen', 'root', '');  
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $select = "SELECT * FROM products  WHERE category = 'socks'";
            //$select = "SELECT * FROM products WHERE category = 'vest'";
            $stmt = $pdo->query($select);

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $fileId = $row['id'];
                $productName = $row['productName'];
                $productPrice = $row['productPrice'];
                $fileUpload = $row['img'];
        ?>
        <tr>
            <td><?php echo $fileId;?></td>
            <td><?php echo $productName;?></td>
            <td><img src="../file/<?php echo $fileUpload;?>" width='80' height='90'></td>
            <td><?php echo $productPrice;?></td>
            <td style="width: 270px;"><a href="update.php?update=<?php echo $fileId; ?>" id="a1">Update</a></td>
            
            <td style="width: 270px;"><a href="delete.php?delete=<?php echo $fileId; ?>" onclick="return confirm('A jeni i sigurt')" id="a2">Delete</a></td>
        </tr>
        <?php
            }
        }
        catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        ?> 
    </table>
</body>

</html>
