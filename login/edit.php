<?php 
session_start(); 
if(!isset($_SESSION["username"])){ 
    header("location: ../index.php"); 
    exit; 
} 
try { 
    $pdo = new PDO('mysql:host=localhost;dbname=oxygen', 'root', ''); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $user = $_SESSION['username']; 
    $select = "SELECT * FROM users WHERE username = :username"; 
    $stmt = $pdo->prepare($select); 
    $stmt->bindParam(':username', $user); 
    $stmt->execute(); 
    
    if($stmt->rowCount() > 0) { 
        $row = $stmt->fetch(PDO::FETCH_ASSOC); 
        $id = $row['id']; 
        $email = $row['email']; 
        $number = $row['number']; 
        $username = $row['username']; 
        $password = $row['password']; // Merr fjalëkalimin nga bazadë të dhënave
    } 
} catch (PDOException $e) { 
    echo 'Error: ' . $e->getMessage(); 
    exit; 
} 
if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $newUsername = trim($_POST['username']); 
    $email = trim($_POST['email']); 
    $number = trim($_POST['phone']); 
    $newPassword = trim($_POST['password']); 
    // Kontrolloni nëse fjalëkalimi i ri është i njëjti me fjalëkalimin në bazën e të dhënave
    if ($newPassword !== $password) { 
        $update = "UPDATE users SET username = :username, email = :email, number = :number, password = :password WHERE id = :id"; 
        $stmt = $pdo->prepare($update); 
        $stmt->bindParam(':username', $newUsername); 
        $stmt->bindParam(':email', $email); 
        $stmt->bindParam(':number', $number); 
        $stmt->bindParam(':password', $newPassword); 
        $stmt->bindParam(':id', $id); 
        try { 
            $stmt->execute(); 
            // Përditëso vlerën e sesionit pas përditësimit të suksesshëm
            $_SESSION['username'] = $newUsername; 
            echo '<script>alert("Data has been updated successfully.");</script>';
        } catch (PDOException $e) { 
            echo 'Error: ' . $e->getMessage(); 
        } 
    } else { 
        echo '<script>alert("Password remains unchanged. Please enter a new password.");</script>'; 
    } 
} 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OXYGEN EDIT</title>
    <link rel="stylesheet" href="edit.css">
    <link rel="shortcut icon" type="x-icon" href="../img/logo2.png">
</head>
<body>
<style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    font-family: 'Source Code Pro', monospace;
    padding: 30px;
    padding-bottom: 0;
    background-color: #f5f5f5;
    overflow-x: hidden;
}
::-webkit-scrollbar{
    width: 10px;
}
::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(#353535);
}
::-webkit-scrollbar-thumb {
    background: linear-gradient(#353535, #353535);
    border-radius: 10px;
}
::-webkit-scrollbar-track {
    background:#f5f5f5;
}
form {
            width: 50%;
            margin: 181px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);z-index: 99;
        }

        input[type="text"],
        input {
            width: calc(100% - 20px);
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
}
#b{
            z-index: -1;
            display: block;
            text-align: center;
            justify-content: center;
            font-size: 100px;
            letter-spacing: 73px;
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
            letter-spacing: 46px;
            color: black;
            font-family: sans-serif;
            -webkit-text-stroke-width: 2px;
            opacity: 0.1;
            margin: 0;
            padding: 0;
        }div{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
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
            transition: all .3s;
            cursor: pointer;
        }
        #a1:hover{
            color: #353535;
            transition: 0.3s;
            scale: 1.06;
            background-color: white;
        }
        @media (max-width: 1000px){
            form {
                width: 100%;
                margin: 130px auto;
            }
        }
       
    </style>
    <?php include('../nav.php'); ?>

    <form method='post' action="edit.php" enctype="multipart/form-data">
        Name:<br>
        <input type="text" name="username" value="<?php echo $username; ?>">
        Email:
        <input name="email" value="<?php echo $email; ?>">
        Phone:
        <input name="phone" value="<?php echo $number; ?>"><br>
        Password:
        <input type="password" name="password" required><br>
        <input type="submit" name="update" value="Update" id="a1">
    </form>

    <div id="design" >
    <h1 id="b">OXYGEN EDIT</h1>
    <h1 id="z">OXYGEN EDIT</h1>
    <h1 id="b">OXYGEN EDIT</h1>
    <h1 id="z">OXYGEN EDIT</h1>
    <h1 id="b">OXYGEN EDIT</h1>
    <h1 id="z">OXYGEN EDIT</h1>
</div>
</body>
</html>