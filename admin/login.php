<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="adminstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="x-icon" href="../img/logo2.png">
    <title>OXYGEN | Admin</title>
</head>
<body>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        h1{
            font-family: 'Teko', sans-serif;
            font-size: 47px;
        }
        #b{
            z-index: -1;
            display: block;
            text-align: center;
            justify-content: center;
            font-size: 100px;
            letter-spacing: 52px;
            color: black;
            font-family: sans-serif;
            -webkit-text-fill-color: transparent;
            -webkit-text-stroke-width: 2px;
            opacity: 0.1;
            margin: 0;
            padding: 0;
        }
        #z{
            display: block;
            text-align: center;
            justify-content: center;
            font-size: 100px;
            letter-spacing: 30px;
            color: black;
            font-family: sans-serif;
            -webkit-text-stroke-width: 2px;
            opacity: 0.1;
            margin: 0;
            padding: 0;
        }
        div{
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
    </style>
<?php

$user = "root";
$pass = "";
$server = "localhost";
$dbname = "oxygen";

try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
} 
catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

if (isset($_POST['submit'])) {
    $usernameINP = $_POST['username'];
    $passwordINP = $_POST['password'];


    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = :username AND password = :password");
    $stmt->execute(array(':username' => $usernameINP, ':password' => $passwordINP));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $_SESSION['admin'] = $usernameINP;
        header("Location: index.php");
        exit();
    } 
    else {
        echo "<script>alert('Invalid username or password')</script>";
    }
}
?>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <h1>Log In</h1>
    <input type="text" name="username" placeholder="Your Username" required>
    <input type="password" name="password" placeholder="Your Password" required>
    <button type="submit" name="submit">Submit</button>
</form>
<div>
    <h1 id="b">OXYGEN ADMIN</h1>
    <h1 id="z">OXYGEN ADMIN</h1>
    <h1 id="b">OXYGEN ADMIN</h1>
    <h1 id="z">OXYGEN ADMIN</h1>
    <h1 id="b">OXYGEN ADMIN</h1>
    <h1 id="z">OXYGEN ADMIN</h1>
</div>
</body>
</html>
