<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=oxygen', 'root', '');

    if (isset($_POST['placeorder'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $method = $_POST['method'];
        $total = $_SESSION['totali'];

        // Adjust the number of placeholders in the SQL query to match the number of values
        $stmt = $pdo->prepare("INSERT INTO orders (user, email, address, paymode, total) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$name, $email, $address, $method, $total]);

        // Uncomment the following lines if you want to delete the cart after a successful order
        // $delete = $pdo->prepare('DELETE FROM cart');
        // $delete->execute();
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>