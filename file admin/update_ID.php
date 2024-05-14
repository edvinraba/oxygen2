<?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=oxygen', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(isset($_POST['update'])) {

            $fileId = $_POST['id'];
            $productName1 = $_POST['productName'];
            $productPrice1 = $_POST['productPrice'];
            $fileUpload1 = $_FILES['fileUpload']['name'];
            $fileUpload1_tmp = $_FILES['fileUpload']['tmp_name'];

            if(!move_uploaded_file($fileUpload1_tmp, "file/$fileUpload1")) {
                echo "<script>alert('You can't upload this image!')</script>";
            }

            if($productName1 == '' || $productPrice1 == '' || $fileUpload1 == '') {
                echo "<script>alert('Ndonjera prej fushave eshte e zbrazet')</script>";
                echo "<script>window.open('viewinsert.php','_self');</script>";
                exit();
            } 
            else {	
                $update_query = "UPDATE products SET
                    productName = :productName1,
                    img = :fileUpload1,
                    productPrice = :productPrice1
                    WHERE
                    id = :fileId";
                
                $stmt = $pdo->prepare($update_query);
                $stmt->bindParam(':productName1', $productName1);
                $stmt->bindParam(':fileUpload1', $fileUpload1);
                $stmt->bindParam(':productPrice1', $productPrice1);
                $stmt->bindParam(':fileId', $fileId);
                
                if($stmt->execute()) {
                    echo "<script>alert('File is updated!')</script>";
                    echo "<script>window.open('viewinsert.php','_self');</script>";
                }
            }
        }
    } 
    catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
?>