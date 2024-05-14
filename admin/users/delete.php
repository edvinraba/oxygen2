<!DOCTYPE html>
<html>

<head>
    <title>View Insert</title>
    <style>
        body{
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        #a1{
            background-color: green;
            letter-spacing: 1px;
            font-family: sans-serif;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        #a2{
            background-color: red;
            letter-spacing: 1px;
            font-family: sans-serif;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>

<body>
        <?php 
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=oxygen', 'root', '');  
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if(isset($_GET['delete'])) {
                $delete_id = $_GET['delete'];
                $delete_query = "DELETE FROM users WHERE id = :id";
                $stmt = $pdo->prepare($delete_query);
                $stmt->bindParam(':id', $delete_id);
                $stmt->execute();
                header('location:users.php');
            }
        }

        catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        ?> 
</body>

</html>
