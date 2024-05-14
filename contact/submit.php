<?php
session_start();

$user = "root";
$pass = "";
$server = "localhost";
$dbname = "oxygen";

try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) {
    echo "Gabim gjatë lidhjes me bazën e të dhënave: " . $e->getMessage();
    exit();
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submit'])) {

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'edvinraba7@gmail.com';
    $mail->Password = 'knimctnvxrmjrflm';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($email, 'Contact'); 
    $mail->addAddress('edvinraba7@gmail.com');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = 'Mesazh nga ' . $name;
    $mail->Body = "
    <html>
    <head>
        <title>Mesazhi i ri</title>
    </head>
    <body>
        <p><strong>Emaili i dërguesit:</strong> $email</p>
        <p><strong>Emri:</strong> $name</p>
        <p><strong>Mesazhi:</strong> $message</p>
    </body>
    </html>";
   
    try {
        $mail->send();
        echo "<script>alert('Emaili u dërgua me sukses!')</script>";
        echo "<script>window.open('contact.php', '_self')</script>";
    } 
    catch (Exception $e) {
        echo "<script>alert('Emaili nuk u dërgua. Gabimi: {$mail->ErrorInfo}')</script>";
    }

    try {
        $sql = "INSERT INTO contact (name, email, message) VALUES (:name, :email, :message)";
        $stmt = $conn->prepare($sql);
        
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);
        
        $stmt->execute();
        
        echo "<script>alert('Të dhënat u futën me sukses!')</script>";
    } 
    catch (PDOException $e) {
        echo "<script>alert('Gabim gjatë futjes së të dhënave: {$e->getMessage()}')</script>";
    }
}
?>
