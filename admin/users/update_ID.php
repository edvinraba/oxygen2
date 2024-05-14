<title>Update</title>
<link rel="shortcut icon" type="x-icon" href="../img/logo2.png">
<?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=oxygen', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(isset($_POST['update'])) {

            $id = $_POST['id'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            if($username == '' || $email == '' || $phone == '') {
                echo "<script>alert('One or more fields are empty')</script>";
                exit();
            } 
            else {	
                $update_query = "UPDATE users SET
                    username = :username,
                    email = :email,
                    number = :phone
                    WHERE
                    id = :id";
                    
                $stmt = $pdo->prepare($update_query);
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':phone', $phone);
                $stmt->bindParam(':id', $id);
                
                if($stmt->execute()) {
                    echo "<script>alert('User information updated successfully!')</script>";
                    echo "<script>window.open('users.php','_self');</script>";
                }
            }
        }
    } 
    catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
?>
