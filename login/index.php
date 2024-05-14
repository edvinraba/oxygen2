<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="x-icon" href="../img/logo2.png">
    <title>OXYGEN | LOGIN</title>
</head>
<body>
    <style>
        form {
            width: 43%;
        }
        body{
            margin: 0;
            padding: 0;
            overflow: hidden;
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
        a{
            text-decoration: none;
            color: black;
        }
        p{
            color: black;
            font-family: 'Teko', sans-serif;
            font-size: 25px;
            transition: 0.7s;
            margin-top: 10px;
        }
        p:hover{
            scale: 1.05;
        }
        @media (max-width: 1200px){
            form {
                width: 67%;
            }
        }
        @media (max-width: 520px){
            form {
                width: 90%;
            }
        }
    </style>
<?php

$user = "root";
$pass = "";
$server = "localhost";
$dbname = "oxygen";

try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
    if (isset($_POST['submit'])) {
        $username = $_POST['username2'];
        $password = $_POST['password'];
    
    
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        $stmt->execute(array(':username' => $username, ':password' => $password));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($row) {
            $_SESSION['username'] = $username;
            header("Location: ../index.php");
            exit();
        } 
        else {
            echo "<script>alert('Invalid username or password')</script>";
        }
    }
} 
catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <h1>Log In</h1>
    <input type="text" name="username2" placeholder="Your Username" required>
    <input type="password" name="password" placeholder="Your Password" required>
    <button type="submit" name="submit">Submit</button>
    <p>Don't have account, <a href="signup.php"><span style="font-weight:bold;">Sign Up!</span></a></p>
</form>
<div id="design" style="overflow: hidden;" >
    <h1 id="b">OXYGEN LOGIN</h1>
    <h1 id="z">OXYGEN LOGIN</h1>
    <h1 id="b">OXYGEN LOGIN</h1>
    <h1 id="z">OXYGEN LOGIN</h1>
    <h1 id="b">OXYGEN LOGIN</h1>
    <h1 id="z">OXYGEN LOGIN</h1>
</div>
</body>
</html>
