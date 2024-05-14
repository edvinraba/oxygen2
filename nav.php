<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
</head>
<body>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        nav{
            font-family: 'Source Code Pro', monospace;
            width: 100%;
            height: 90px;
            background-color:#f5f5f5;
            display: flex;
            text-align: center;
            justify-content: center;
            position: fixed;
            z-index: 99;
            top: 0;
            left: 0;
        }
        nav #bag{
            position: absolute;
            left: 87%;
            cursor: pointer;
        }
        nav #menu{
            margin-top: 36px;
            position: absolute;
            left: 77%;
            display: none;
        }
        nav #user{
            position: absolute;
            left: 84%;
            cursor: pointer;
            width: 27px;
            height: 27px;
            margin-top: 31px;
            z-index: 99;
        }
        nav #menu i {
            transition: transform 0.3s ease;
        }
        nav #menu.active i {
            transform: rotate(90deg);
        }
        nav #ul1 li span{
            transition: 0.5s;
        }
        nav ul{
            list-style: none;
            display: flex;
            margin: 0 auto;
            margin-top: 10px;
        }
        nav ul li{
            padding: 20px;
            font-size: 21px;
            transition: 0.5s;
        }
nav a{
text-decoration: none;
color: black;
}
nav #ul1 li #l4{
background-color: #353535;
color: white;
padding: 8px 18px;
border-radius: 58px;
transition: all .3s;
letter-spacing: 0px;
}
nav #ul1 li #l4:hover{
border: 1px solid;
background-color: white;
color: #353535;
transform: scale(1.4);
}
nav #logo{
position: absolute;
width: 268px;
height: 200px;
float: left;
margin-top: -54px;
left: 40px;
animation-name: logoanm;
animation-duration: 2s;
animation-iteration-count: 1;
}
@keyframes logoanm{
from{
width: 0;
}
to{
width: 268px;
}
}
nav #ul2 {
    position: absolute;
    display: none;
    font-size: 16px;
    margin-top: 90px;
    padding-top: 15px;
    margin-left: 59%;
    width: 200px;
    height: auto;
    background: whitesmoke;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}
@media (max-width: 640px){
    nav #ul2 {
        margin-left: 45%;
    }
}
nav #ul2 p{
    padding: 10px;
}
.cart {
    margin-right: 13px;
    display: grid;
    padding: 20px;
    width: 410px;
    position: absolute;
    float: right;
    right: 16px;
    z-index: 9;
    background: white;
    top: 90px;
}
.cart-item-content{
    display: flex;
    justify-content: flex-start;
}
.cart #btncart{
    border-radius: 58px;
    padding: 17px;
    padding-left: 40px;
    padding-right: 40px;
    letter-spacing: 0px;
    font-size: 15px;
    font-family: 'Source Code Pro', monospace;
    border: 1px solid;
    color: white;
    background-color: #353535;
    transition: 0.3s;
    cursor: pointer;
    margin-top: 10px;
}
.cart #btncart:hover{
    color: #353535;
    transition: 0.3s;
    scale: 1.06;
    background-color: white;
}
.cart-title {
    font-size: 37px;
    font-family: 'Teko', sans-serif;
    margin: 0 0 10px;
}
.cart-items {
list-style-type: none;
display: flex;
flex-direction: column;
max-height: 300px;
min-height: 50px;
overflow: auto;
padding: 0;
margin: 0;
}
.cart-items li{
font-size: 16px;
}
.cart .total-price{
float: right;
}
.item-info span{  
margin-left: 27px;
position: relative;
top: 28px;
}
.remove-from-cart{
width: 40px;
height: 40px;
position: relative;
left: 36px;
top: 27px;
border: 0;
border-radius: 30px;
cursor: pointer;
transition: 0.3s;
}
.remove-from-cart:hover{
    scale: 1.15;
transition: 0.3s;
}
.cart img{
    width: 90px;
    height: 90px;
}
@media (max-width: 1244px){
    nav #bag {
        left: 88%;
    }
}
@media (max-width: 1160px){
    nav #bag {
        left: 92%;
    }
}
@media (max-width: 984px){
    nav ul {
        margin-left: 34%;
    }
}
@media (max-width:850px){
    nav #bag {
        left: 94%;
    }
}
@media (max-width: 875px){
    nav #bag {
        left: 91%;
    }
    nav #logo{
        left: -9px;
    }
    nav #ul1 {
        list-style: none;
        display: none;
        font-size: 16px;
        margin-top: 81px;
        margin-left: 0;
        width: 100%;
        height: 365px;
        background: whitesmoke;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }
    nav #ul1 li {
        padding: 33px;
    }
    nav #menu{
        display: block;
        cursor: pointer;
    }
}
@media (max-width: 414px){
    nav #logo{
        left: -24px;
        width: 245px;
    }
    @keyframes logoanm{
    from{
        width: 0;
    }
    to{
        width: 245px;
    }}
    nav #menu {
        left: 72%;
    }
    nav #user {
    left: 81%;}

}
    </style>
    <nav>   
        <a href="../index.php">
            <img src="../img/oxygen.png" id="logo">
        </a>
        <ul id="ul1">
            <li><a href="../index.php" id="l1" class="lii">H<span>o</span><span>m</span><span>e</span></a></li>
            <li><a href="../shop/index.php" id="l2" class="lii">S<span>h</span><span>o</span><span>p</span></a></li>
            <li><a href="../about/index.php" id="l3" class="lii">A<span>b</span><span>o</span><span>u</span><span>t</span></a></li>
            <li><a href="../contact/index.php" id="l4">C<span>o</span><span>n</span><span>t</span><span>a</span><span>c</span><span>t</span></a></li>
        </ul>
        <a href="../shop/cart.php" id="bag" title="Shporta"><ion-icon name="bag-outline" style="width: 27px; height: 27px; margin-top: 31px;"></ion-icon></a>
        <ion-icon name="person-outline" id="user"></ion-icon>
        <ul id="ul2">
            <p><?php if(isset($_SESSION['username'])){
                echo $_SESSION['username'];
                echo 
                '<a href="../login/edit.php">
                    <p>Edit</p>
                </a>';
                echo 
                '<a href="../shop/logout.php">
                    <p>Log Out</p>
                </a>';
            }
            else{
                echo 'Not logged in';
                echo 
                '<a href="../login/index.php">
                    <p>Log in</p>
                </a>';
            }
            ?></p>
        </ul>
        <a id="menu"><i class="fa-solid fa-bars fa-xl" style="color: #353535;"></i></a>
    </nav>
    <script>
        $(document).ready(function(){
            $('#user').click(function(){
                $('#ul2').slideToggle(250);
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#menu').click(function(){
                $('nav #ul1').slideToggle(250);
                $(this).toggleClass("active");
                $(this).find('i').toggleClass("fa-bars fa-times");
            });
        });
        </script>
    <script>
        $(document).ready(function(){
            $('.cart ul').after("<hr></hr>")
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#bag').click(function(){
                $('.cart').slideToggle(250);
            });
        });
    </script>
</body>
</html>