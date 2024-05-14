<?php

    session_start();

    if(!isset($_SESSION["admin"])){
        header("location: logout.php");
    }
    else{
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    <link rel="shortcut icon" type="x-icon" href="../img/logo2.png">
    <title>OXYGEN | Admin | Dashboard</title>
</head>
<body>
    <style>
        body{
            background-color: #f5f5f5;
        }
        .main .dsh{
            background-color: #f5f5f5;
            border: none;
            border-right: 6px solid #353535;
            border-left: 6px solid #353535;
            text-align: center;
            width: 88%;
        }
        .main{
            width: 88%;
        }
        a{
            text-decoration: none;
            width: 100%;
            color: #353535;
        }
        h1{
            color: #353535;
        }
        #icon{
            width: 150px;
            height: 150px;
            margin-top: 82px;
            color: #353535;
        }
        .main .dsh h1{
            margin-top: 43px;
            opacity: 0;
            position: relative;
        }
        .main .dsh:hover h1{
            margin-top: 93px;
        }
    </style>
    <nav>
        <h1>OXYGEN DASHBOARD</h1>
        <a href="logout.php" style="width: 0;" >
            <p style="position: absolute; font-size: 30px; top: 20px; right: 25px; ">Log Out</p>
        </a>
    </nav>
    <div class="main">
        <a href="insert.php">
        <div class="dsh">
            <ion-icon name="cloud-upload-outline" id="icon"></ion-icon>
            <h1>Insert Product</h1>
        </div>
        </a>
        <a href="products.php">
        <div class="dsh">
            <ion-icon name="shirt-outline" id="icon"></ion-icon>
            <h1>View Products</h1>
        </div>
        </a>
        <a href="orders/index.php">
        <div class="dsh">
            <ion-icon name="document-text-outline" id="icon"></ion-icon>
            <h1>Orders</h1>
        </div>
        </a>
        <a href="users/users.php">
        <div class="dsh">
            <ion-icon name="person-outline" id="icon"></ion-icon>
            <h1>Users</h1>
        </div>
        </a>
    </div>
    <div class="design" >
        <h1 id="b">OXYGEN DASHBOARD</h1>
        <h1 id="z">OXYGEN DASHBOARD</h1>
        <h1 id="b">OXYGEN DASHBOARD</h1>
        <h1 id="z">OXYGEN DASHBOARD</h1>
        <h1 id="b">OXYGEN DASHBOARD</h1>
        <h1 id="z">OXYGEN DASHBOARD</h1>
    </div>
</body>
</html>


<?php } ?>