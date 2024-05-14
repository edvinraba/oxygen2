<!DOCTYPE html>
<html>

<head>
    <title>View Insert</title>
    <style>
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

<body>
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

            $select = "SELECT * FROM products";
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
            <td><img src="file/<?php echo $fileUpload;?>" width='80' height='90'></td>
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
