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
    <link rel="stylesheet" type="text/css" href="path-to-your-ionic-icons/css/ionicons.min.css">
</head>
<body>
    <style>
        footer{
    width: 100%;
    height: auto;
    background-color: #f3f4f6;
    margin-top: 29px;
    display: block;
}
footer a{
    text-decoration: none;
}
footer .top{
    width: 100%;
    height: 180px;
    display: grid;
    border-bottom: 1px solid;
    border-color: #d8cdbe;
    text-align: center;
    overflow: hidden;
    place-items: center;
    justify-content: center;
}
footer .top img{
    margin-top: -140px;
}
footer .bottom{
    width: 100%;
    height: 65%;
    padding-top: 50px;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
    grid-gap: 11rem;
}
footer h4 {
    font-family: 'Teko', sans-serif;
    font-size: 30px;
    letter-spacing: 1px;
}
footer p{
    font-size: 19px;
    margin: 12px 12px 12px 0px;
    font-family: 'Source Code Pro', monospace;
}
footer .social .flex{
    display: flex;
    width: 180px;
    justify-content: space-between;
}
footer .social .scl{
    width: 50px;
    
    height: 50px;
    transition: 0.5s;
    background-color: black;
    border-radius: 30%;
    display: flex;
    justify-content: center;
    cursor: pointer;
    place-items: center;
}
footer .social .scl i {
    color: white;
    transition: 0.5s;
}
footer .social .scl:hover{
    transform: scale(1.06);
    background-color: white;
}
footer .social .scl:hover i {
    color: black;
}
@media (max-width: 547px){
    footer .bottom{
        padding-bottom: 20px;
        grid-gap: 4rem;
    }
}
@media (max-width: 425px){
    footer .top img{
        margin-top: -90px;
        width: 450px;
    }
}
@media (max-width: 360px){
    footer .top img {
        margin-top: -75px;
        width: 420px;
    }
}
    </style>
<footer>
        <div class="top">
            <img src=".././img/oxygen.png" >
        </div>
        <div class="bottom">
            <div class="first">
                <h4>COMPANY</h4>
                <p>About</p>
                <p>Features</p>
                <p>Works</p>
                <p>Privacy</p>
            </div>
            <div class="first">
                <h4>FAQ</h4>
                <p>Account</p>
                <p>Deliveries</p>
                <p>Orders</p>
                <p>Payments</p>
            </div>
            <div class="third">
                <h4>RESOURCES</h4>
                <p>Youtube Playlist</p>
                <p>Development Tutorials</p>
                <p>Free eBooks</p>
            </div>
            <div class="social">
                <h4>SOCIAL</h4>
                <div class="flex">
                    <a href="https://www.instagram.com/edvinraba/" target="_blank">
                        <div class="scl">
                            <i class="fa-brands fa-instagram fa-xl"></i>
                        </div>
                    </a>
                    <a href="https://www.facebook.com/edvinraba/" target="_blank">
                        <div class="scl">
                            <i class="fa-brands fa-facebook fa-xl"></i>
                        </div>
                    </a>
                    <a href="https://web.snapchat.com/" target="_blank">
                        <div class="scl">
                            <i class="fa-brands fa-snapchat fa-xl"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>