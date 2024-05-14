

<?php
session_start();

if(!isset($_SESSION["admin"])){
    header("location: index.php");
}
else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="view/viewport" content="width=deview/vice-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="prodsstyle.css">
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
    <nav>
        <a href="index.php">
            <h1>OXYGEN DASHBOARD</h1>
        </a>
    </nav>
    <div class="main">
        <a href="view/viewjeans.php">
        <div class="dsh">
            <h1>Jeans</h1>
        </div>
        </a>
        <a href="view/viewhoodie.php">
        <div class="dsh">
            <h1>Hoodie</h1>
        </div>
        </a>
        <a href="view/viewtshirt.php">
        <div class="dsh">
            <h1>T-Shirt</h1>
        </div>
        </a>
        <a href="view/viewshirt.php">
        <div class="dsh">
            <h1>Shirt</h1>
        </div>
        </a>
    </div><br>
    <div class="main">
        <a href="view/viewvest.php">
        <div class="dsh">
            <h1>Vest</h1>
        </div>
        </a>
        <a href="view/viewjacket.php">
        <div class="dsh">
            <h1>Jacket</h1>
        </div>
        </a>
        <a href="view/viewshoes.php">
        <div class="dsh">
            <h1>Shoes</h1>
        </div>
        </a>
        <a href="view/viewsocks.php">
        <div class="dsh">
            <h1>Socks</h1>
        </div>
        </a>
    </div><br>
    <div class="main ndryshe">
        <a href="view/viewinsert.php">
            <div class="dsh">
                <h1>View all products</h1>
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
        <h1 id="b">OXYGEN DASHBOARD</h1>
        <h1 id="z">OXYGEN DASHBOARD</h1>
        <h1 id="b">OXYGEN DASHBOARD</h1>
        <h1 id="z">OXYGEN DASHBOARD</h1>
        <h1 id="b">OXYGEN DASHBOARD</h1>
        <h1 id="z">OXYGEN DASHBOARD</h1>
        <h1 id="b">OXYGEN DASHBOARD</h1>
    </div>
</body>
</html>
<?php  } ?>