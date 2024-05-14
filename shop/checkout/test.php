<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="cartstyle.css">
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
    <link rel="shortcut icon" type="x-icon" href="../img/logo2.png">
    <title>OXYGEN | Cart</title>
</head>
<body>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .main{
            width: 35%;
            height: 1100px;
            margin: 0 auto;
        }
        .top{
            width: 100%;
            height: 15%;
            display: grid;
            place-items: center;
        }
        .btm{
            width: 100%;
            height: 85%;
            border: 1px solid #d8cdbe;;
            border-radius: 5px;
            overflow: hidden;
        }
        .btm .t{
           width: 100%;
           height: 110px;
           background-color: #353535;
           color: white;
           font-size: 37px;
           font-family: 'teko', sans-serif;
           letter-spacing: 1px;
           padding: 32px;
        }
        .btm .b{
           width: 100%;
           font-size: 15px;
           font-family: 'Source Code Pro', monospace;
           height: 80%;
           padding: 30px;
        }
        #h{
            margin-bottom: 20px;
        }
        h4{
            margin-top: 20px;
            font-weight: bold;
            font-size: 19px;
            font-family: sans-serif;
            letter-spacing: 1px;
            color: #353535;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 30px;
        }

        th, td {
            border: 2px solid #d8cdbe;
            padding: 13px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

    </style>
    <div class="divi" style="width: auto; height: auto; background-color: #f5f5f5 ">
    <div class="main">
        <div class="top">
        <img src="../../img/ox3.png" style="width:70%" class="CToWUd" data-bit="iit">
        </div>
        <div class="btm">
            <div class="t">
                <p>Thank you for your order!</p>
            </div>
            <div class="b">
                <p id="h" >Hi edvin</p>
                <p id="o" > Your order has been recived and now is being processed. Your order details are shown below for your reference.</p>
                <h4>Order #131 (26 March 2007)</h4>
        <table>
        <tr>
            <th>Product</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>Jeans 4</td>
            <td>25$</td>
        </tr>
        <tr>
            <td>Subtotal:</td>
            <td>2</td>
        </tr>
        <tr>
            <td>Address</td>
            <td>Nena Tereza</td>
        </tr>
        <tr>
            <td>Payment Method</td>
            <td>Cash</td>
        </tr>
        <tr>
            <td>Total</td>
            <td>100$</td>
        </tr>
    </table>
            </div>
        </div>
    </div>
    </div>

</body>
</html>