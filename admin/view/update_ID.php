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

            // Kontrolloni nëse emri dhe imazhi janë të njëjtë
            $check_query = "SELECT * FROM products WHERE productName = :productName AND img = :fileUpload";
            $check_stmt = $pdo->prepare($check_query);
            $check_stmt->bindParam(':productName', $productName1);
            $check_stmt->bindParam(':fileUpload', $fileUpload1);
            $check_stmt->execute();
            $existing_product = $check_stmt->fetch(PDO::FETCH_ASSOC);

            if($existing_product) {
                echo "<script>alert('This product exists')</script>";
                echo "<script>window.open('products.php','_self');</script>";
            } else {
                if(!move_uploaded_file($fileUpload1_tmp, "file/$fileUpload1")) {
                    echo "<script>alert('You can't upload this image!')</script>";
                }

                if($productName1 == '' || $productPrice1 == '' || $fileUpload1 == '') {
                    echo "<script>alert('Ndonjera prej fushave eshte e zbrazet')</script>";
                    echo "<script>window.open('viewinsert.php','_self');</script>";
                    exit();
                } else {    
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
    } 
    catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
?>
