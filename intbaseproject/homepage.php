<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CARHUNDRED</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/0f4915f0d0.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair:wght@300;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">
</head>
<body>
    
    <section id="menu">
        <div id="logo">CARHUNDRED</div>
        <nav>
            <a href="#homepage">HOME</a>
            <a href="#about">ABOUT US</a>
            <a href="#cars">CARS</a>
            <a href="#contact">CONTACT US</a>
            <a href="register.php">CHANGE PASSWORD</a>
            <a href="announcements.php"></i>ANNOUNCEMENTS</a>
            <a href="new.php"><i class="fa-solid fa- ikon"></i>NEW CARS</a>

        </nav>
    </section>

    <section id="homepage">
        <div id="black"></div>
        <div id="contents">
            <h2>CARHUNDRED</h2>
            <hr width="300" align="left">
            <p style="font-size:150%; font-family: Verdana;">If you are curious about cars, you have come to the right place. You can see the latest model cars on this site.</p>

        </div>
    </section>

    <section id="about">
        <h3 id="h3about">ABOUT US</h3>
        <div class="container">
            <div id="left">
                <h5 id="h5left">BMW , Mercedes , Volkswagen , Tesla , Ferrari , Volvo , Peugeot ,Ford</h5>
            </div>
            <div id="right">
            <p id="pright" style="font-size:150%; color:black;">We are a company that shows the latest model and latest cars with their features to enthusiasts.</p>


            </div>

            <img src="images/about2.png" alt="" class="img-fluid mt100">

            <p id="plast"></p>
        </div>
    </section>

    <section id="recipes">
        <h3 id="h3about">Best Cars for Each Brands</h3>
        <div class="container">
            
            <div class="owl-carousel owl-theme">
                <div class="card item" data-merge="1.5">
                    <img src="images/laferrari.png" alt="" class="img-fluid">
                    <h5 class="titlecard">LaFerrari</h5>
                    <p class="pcard">
                    LaFerrari: Italian manufacturer Ferrari's hybrid sports car. Introduced in 2013, it boasts high performance and unique design.  
                    </p>
                </div>
                <div class="card item" data-merge="1.5">
                    <img src="images/gtm.png" alt="" class="img-fluid">
                    <h5 class="titlecard">The Mercedes-AMG GT Coupe</h5>
                    <p class="pcard">
                       
The Mercedes-AMG GT Coupe: A luxurious sports car by Mercedes-Benz, boasting sleek design, powerful engines, and advanced tech for an exhilarating drive.
                    </p>
                </div>
                <div class="card item" data-merge="1.5">
                    <img src="images/bmw.png" alt="" class="img-fluid">
                    <h5 class="titlecard">BMW M4</h5>
                    <p class="pcard">
                    The BMW M4 is a top-tier, high-performance sports car by BMW, renowned for its powerful engine, sharp handling, and stylish design.
                    </p>
                </div>
                <div class="card item" data-merge="1.5">
                    <img src="images/tesla.png" alt="" class="img-fluid">
                    <h5 class="titlecard">Tesla Model S </h5>
                    <p class="pcard">
                    The Tesla Model S is a luxury all-electric sedan known for its high performance, advanced technology, and stylish design.
                    </p>
                </div>
                <div class="card item" data-merge="1.5">
                    <img src="images/wg.png" alt="" class="img-fluid">
                    <h5 class="titlecard">Volkswagen XL Sport</h5>
                    <p class="pcard">
                    The Volkswagen XL Sport is a special edition sports car known for its sleek design and high-performance motorcycle-derived engine.
                    </p>
                </div>
                <div class="card item" data-merge="1.5">
                    <img src="images/volvo.png" alt="" class="img-fluid">
                    <h5 class="titlecard">Volvo XC90</h5>
                    <p class="pcard">
                    The Volvo XC90 is a luxury SUV made by the Swedish automaker Volvo. It's recognized for its elegant Scandinavian design, advanced safety features, spacious interior, and smooth driving experience
                    </p>
                </div>
                <div class="card item" data-merge="1.5">
                    <img src="images/408.png" alt="" class="img-fluid">
                    <h5 class="titlecard">Peugeot 408</h5>
                    <p class="pcard">
                    The Peugeot 408 is a compact sedan manufactured by the French automaker Peugeot. It's appreciated for its stylish design, comfortable ride, and fuel-efficient engines.
                    </p>
                </div>
                <div class="card item" data-merge="1.5">
                    <img src="images/focus.png" alt="" class="img-fluid">
                    <h5 class="titlecard">Ford Focus</h5>
                    <p class="pcard">
                    The Ford Focus is a compact car produced by the American automaker Ford. It's known for its practicality, fuel efficiency, and sporty driving dynamics.
                    </p>
                </div>
            </div>
        </div>
    </section>



    <section id="contact">
        <h3 id="h3about">CONTACT US</h3>
        <div class="container">
            <form action="homepage.php" method="post">
            <div id="contactopac">
                <div id="formgroup">
                    <div id="leftform">
                        <input type="text" name="name" placeholder="Name" required class="form-control">
                        <input type="text" name="surname" placeholder="Surname" required class="form-control">
                    </div>
                    <div id="rightform">
                        <input type="email" name="mail" placeholder="E-mail" required class="form-control">
                        <input type="text" name="topic" placeholder="Topic" required class="form-control">
                    </div>

                    <textarea name="message" id="" cols="30" rows="10" placeholder="Write Message" required class="form-control"></textarea>

                    <input type="submit" value="SUBMIT">
                </div>

                
            </div>
            </form>
            <footer>
                <div id="copyright">Mete Yılmaz</div>
                <a href="#menu"><i class="fa-solid fa-circle-up" id="up"></i></a>
            </footer>

        </div>
    </section>
    <script
    src="https://code.jquery.com/jquery-3.7.0.slim.min.js"
    integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE="
    crossorigin="anonymous"></script>    
    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/script.js"></script>
</body>
</html>

<?php

include("connection2.php");

if (isset($_POST["name"], $_POST["surname"], $_POST["mail"], $_POST["topic"], $_POST["message"]))
{
    $name=$_POST["name"];
    $surname=$_POST["surname"];
    $mail=$_POST["mail"];
    $topic=$_POST["topic"];
    $message=$_POST["message"];

    $insert="INSERT INTO messages (f_name, l_name, email, topic, message) VALUES ('".$name."', '".$surname."','".$mail."','".$topic."','".$message."')";

    if ($conn->query($insert)===TRUE){
        echo "<script>alert('Your message has been sent successfully.')</script>";
    }
}
?>