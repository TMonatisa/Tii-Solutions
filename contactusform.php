<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/7b0776917e.js" crossorigin="anonymous"></script>
    <script src="JavaScripts/index.js"></script>
    <title>Document</title>
    <style>
        nav{
            background-color: rgba(61, 8, 123, 0.5);
            width: 60%;
            height: 100vh;
            position: absolute;
            padding: 25px;
            overflow: hidden;
            left: -60%;
            transition: 0.5s ease;
        }
        nav img{
            position: relative;
            width: 100%;
        }
        nav ul{
            list-style: none;
            padding: 20px;
        }
        nav ul li{
            padding: 10px;
            font-size: 24px;
        }
        nav ul li a{
            color: white;
            text-decoration: none;
        }
        .nav-toggle{
            display: none;
        }
        .nav-toggle-label{
           z-index: 1;
            position: absolute;
        }
        .nav-toggle:checked{
            left: 60%;
            transition: ease 0.5s;
        }
        .nav-toggle:checked ~ nav{
            left: 0;
        }
    </style>
</head>
<body>
<input type="checkbox" id="nav-toggle" class="nav-toggle">
<label id="open" class="nav-toggle-label" for="nav-toggle">
    <span><i class="fa fa-bars" aria-hidden="true"></i></span>
</label>
<nav>
    <label id="close" class="nav-toggle-label" for="nav-toggle">
        <span><i class="fa fa-times" aria-hidden="true"></i></span>
    </label>
    <a href="#home"><img class="MyLogo" src="Image/Tii%20Solutions%20logo.png" alt="..."></a>
    <ul>
        <li><a href="#home" for="nav-toggle">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#team">Team</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</nav>



<div class="container">
    <div class="row" id="home">
        <div class="col-sm-6 text-center">
            <p><i class="fas fa-map-marker-alt"></i> Central Place, Riebeeckstad, Welkom, Free State, South Africa
            </p>
            <p><i class="fas fa-phone"></i><i class="fab fa-whatsapp"></i> +27 62 035 9632</p>
            <p><i class="fas fa-envelope"></i> TiisetsoMonatisa@gmail.com</p>
        </div>
        <div class="col-sm-6">
            <form>
                <div class="row">
                    <input type="text" placeholder="Full Name" id="name" name="name" class="p-3 col-sm-6">
                    <input type="text" placeholder="Phone" id="phone" name="phone" class="p-3 col-sm-6">
                </div>


                <div class="row">
                    <input type="email" placeholder="Email" id="email" name="email" class="p-3">
                </div>
                <div class="row">
                    <textarea placeholder="Message" id="message" class="p-3"></textarea>
                </div>
                <div class="row">
                    <input type="button" value="Contact Us" id="submit" name="submit" class="p-3">
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
