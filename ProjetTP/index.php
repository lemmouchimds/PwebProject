<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

    <?php 
    $servername = "localhost";
    $database = "eventpage";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if ($conn->connect_error) 
    {
    die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST['sending'])) 
    {
        $subject = $_POST['subject'];
        $mailForm = $_POST['mail'];
        $text = $_POST['message'];
        $mailTo = "contact@microclub.net";
        $headers = "From: ".$mailFrom;
        $txt = "You received email from ".$mailForm.".\n\n".$text;
        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.php?mailsend");
    }
    ?>
    <head>
        <title>Micro Club</title>
        <link rel="stylesheet" href="Styles/design.css">
        <link rel="shortcut icon" type="image/pnj" href="Pics/263414991_1513069752401389_4681943082764289098_n.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://www.w3schools.com/js/myScript.js"></script> 
        <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>

<body>

<!-- message de confirmation d'inscription -->
<?php 
if(isset($_SESSION['status']) && $_SESSION["status"] !='')
{
 ?>
    <script>
    swal("Good job!", "Your Subscription Has been Approved !", "success");
    </script>
    <?php unset($_SESSION['status']);
}
?>

    <header class="header-content">
        <img src="Pics/263414991_1513069752401389_4681943082764289098_n.png" alt="Micro Club logo">
        <div class="header-right">
            <a href="Pages/Evenement.php">Events</a>
            <a href="Pages/Log-in.php"><?php if(isset($_SESSION['val'])){echo($_SESSION['val']);} else {echo("Sign in");}?></a> <!-- //si l'utilisateur existe deja, on affiche son nom dans le header dans l'index page -->
        </div>
    </header> 

    <div class="back">
        <section class="hero">
            <div class="intro-text">
                <h1>
                Hello There ! Welcome to <br />MICRO CLUB
                </h1>
                <h3>
                We're a scientific club located in <a href="https://www.usthb.dz/fr" style="text-decoration:none; color:white">USTHB</a> <br />
                Our purpose is to help students get started in the Tech field <br/> Scroll for More Informations!
                </h3>
            </div>
            <div class="i-frame">
                <div class="stand-1">
                    <svg id="White_logo_-_With_Blue_Bckground" data-name="White logo - With Blue Bckground" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400"><defs>
                    <style>.cls-1{fill:#fff;}</style>
                    </defs> <g id="MC"><path class="cls-1" d="M376.42,75V252.5a5.67,5.67,0,0,1-5.68,5.67H227.32a5.67,5.67,0,0,1-5.67-5.67v-3.72a5.68,5.68,0,0,1,5.65-5.68c8.11,0,16.12.61,24.11.61,9.82,0,20.24-.61,30.25.51,5.35.59,10.59,3,16.39,4a141.67,141.67,0,0,0,50.08-.65,5.67,5.67,0,0,0,4.56-4.73c1.77-12.2,2.8-25.14,4.29-37.63a5.67,5.67,0,0,0-7.12-6.15c-11.43,3.13-22.64,6.27-33.95,3.83-20.06-4.32-40.07-30.33-28.28-56.28a44.18,44.18,0,0,1,9.42-12.46,45.72,45.72,0,0,1,12.9-8c12.24-4.64,26.71-2.65,38,1.63a5.66,5.66,0,0,0,7.62-6.11q-2.73-18.92-5.37-37.93A5.72,5.72,0,0,0,345.67,79C331.56,76,317.2,75.4,303,78.34c-4.63,1-8.89,3-13.38,3.48-5.68.59-11.76.26-17.38.51-14.32.63-29.15,1.48-44.79,1.87a5.66,5.66,0,0,1-5.79-5.67V70.87c-.05-.72-.08-1.41.49-1.5h148.6A5.67,5.67,0,0,1,376.42,75Z"/>
                    <path class="cls-1" d="M250.92,224.29a52.57,52.57,0,0,0,4.82,4.79,1.89,1.89,0,0,1-1.24,3.28c-10.43.29-20.62.82-30.87,1.31a1.89,1.89,0,0,1-2-1.89V216.53a1.88,1.88,0,0,1,2.1-1.87c7.2.83,13.93-1.4,19.23.67,3.43,1.33,5.65,6.28,7.94,9"/><path class="cls-1" d="M258.34,96.27c-2.12,4.9-7,7.07-10.14,10.94a3.14,3.14,0,0,1-2.23,1.12c-6.78.39-13.9.45-21.13.41a3.21,3.21,0,0,1-3.19-3.21v-7.8a3.22,3.22,0,0,1,3.36-3.2c11.77.43,25.6-3.25,33.33,1.74"/><path class="cls-1" d="M236,204.86h-12.5a1.89,1.89,0,0,1-1.89-1.89V181.86a1.9,1.9,0,0,1,1.89-1.9h4.09a1.89,1.89,0,0,1,1.84,1.42c2,8,3.23,16.79,6.57,23.48"/><path class="cls-1" d="M237,123.17c-.19,4.64-2.54,7.12-4,10.52a2.76,2.76,0,0,1-2.25,1.69c-2,.19-4.19.14-6.22.28a2.77,2.77,0,0,1-3-2.76V122.38a2.76,2.76,0,0,1,2.71-2.77c5.5-.1,10.5.32,12.68,3.56"/><path class="cls-1" d="M223.8,149.08h2.56a2.16,2.16,0,0,1,2.15,2.28c-.27,4.57-.92,8.74-.93,13.57a2.13,2.13,0,0,1-1.83,2.08c-.51.08-1,.21-1.45.32a2.15,2.15,0,0,1-2.65-2.09v-14A2.15,2.15,0,0,1,223.8,149.08Z"/><path class="cls-1" d="M204.29,147.09a200.77,200.77,0,0,1,2.41,20.71,1.16,1.16,0,0,1-1.12,1.23c-16.19.42-45.25,1.76-51.25,2a1.16,1.16,0,0,1-1.2-1l-.3-3.13-1.33,3.4a1.14,1.14,0,0,1-1,.73c-5.61.23-41.44,1.71-60.9,2.43a2.58,2.58,0,0,1-2.43-1.39l0-.05a1.15,1.15,0,0,0-2.16.42c-.2,2,0,4.13-.21,6-2.42,21.94-5.45,47.36-7.83,70.21a1.16,1.16,0,0,1-1.15,1H20.15A1.15,1.15,0,0,1,19,248.34c9.79-55,18.66-111,28.5-165.91a1.5,1.5,0,0,0,0-.2v-1.4H97.17a1.18,1.18,0,0,1,1.15.87c.52,2,1.53,3.59,2,5.63a1.15,1.15,0,0,1-1.15,1.4c-3.92-.06-6.85.85-11,.57,3.11,1.09,8.13.27,12.15.45l1,.76c2.71,7.13,5.47,14.2,7.73,21.77l-1.06,1.5c-6.87.37-13.62.87-20.83.92a184,184,0,0,0,22.5,1,1.17,1.17,0,0,1,1.1.76c2.67,7.09,5,14.47,7.83,21.45a2.71,2.71,0,0,1-2.2,3.67c-1.29.16-2.61.29-3.94.4a1.16,1.16,0,0,0,.08,2.31c2.33.06,4.62.15,6.86.3,1-.24,1.44,0,1.71.48a1.14,1.14,0,0,0,2,0,1.15,1.15,0,0,1,1.28-.49c26.39,1.06,53.44,1.47,79.87,2.5"/><path class="cls-1" d="M201.31,118.69c.33,6.65,1.48,12.45,2,18.93h0c-26.19,1.09-52.34,2.22-77.88,4h0c-1.42-1.4.37-3.75,1-5.48,1.92-5.29,4.54-12.54,7-17.93h0c0-.71-.09-1.42.51-1.5,22.77.37,45.33,1,67.44,2"/><path class="cls-1" d="M196.87,80.83v3c-1.22,1.9-3.92,1.37-6,1.49-14.62.8-30.87,1-46.12,1.5,1.2-2,1.24-5.06,3-6.48,16.2.33,33.73-.67,49.13.5"/><path class="cls-1" d="M149.23,176c-3.67,10.18-7.77,20-11.89,29.68L135.55,207c-10.64.87-22.52.5-33.29,1.25l-2.16-1.45c-3.39-10.22-7.53-19.69-10.94-29.9a2.15,2.15,0,0,1,2.1-2.81c19.41.54,38.88,1.06,58,1.92"/><path class="cls-1" d="M135.35,210.85c-3,7.9-6.12,15.64-9.29,23.36l-2.32,1.55H112.8l-2.35-1.68c-2.54-7.15-5.54-13.84-7.84-21.24a2.51,2.51,0,0,1,2.52-3.26c9.94.57,20.53.45,30.22,1.27"/><path class="cls-1" d="M124.42,238.24c-.75,2.7-2.35,5.19-3.47,8-.74,1.87-1,4.24-2,6l-1.93-.25c-1.33-4.48-3.33-8.29-4.62-12.8l1.09-1.35c3.67.13,6.84.78,10.94.47"/><path class="cls-1" d="M214.56,253.79,164,255.09a2.62,2.62,0,0,1-2.66-2.3l-.77-10.4a2.63,2.63,0,0,1,2.67-2.95l50.76,1.3a2.62,2.62,0,0,1,2.51,2.19l.59,7.81A2.62,2.62,0,0,1,214.56,253.79Z"/><path class="cls-1" d="M210.94,233.72,163.24,235a3.35,3.35,0,0,1-3.42-3l-2-17.41a3.36,3.36,0,0,1,3.51-3.74l47.8,2.52a3.34,3.34,0,0,1,3.14,2.87l1.95,13.64A3.35,3.35,0,0,1,210.94,233.72Z"/><path class="cls-1" d="M208,180.62l3.19,20.25a3.6,3.6,0,0,1-3.46,4.16l-47.22,1.25a3.62,3.62,0,0,1-3.66-3.1l-3.25-22.73a3.61,3.61,0,0,1,3.67-4.11l47.26,1.24A3.62,3.62,0,0,1,208,180.62Z"/><path class="cls-1" d="M197.85,92.28c.79,4.77,1.45,9.67,1.82,14.86l-2.43,2.65c-19.71.59-39,1.58-58.16,2.7a2.5,2.5,0,0,1-2.51-3.3,161.84,161.84,0,0,1,6.48-16.93l2.36-1.4c17.17.8,35.14.76,52.44,1.42">
                    </svg>
                <div class="stand-2"></div>
            </div>
    </section>
    </div> 

    <div class="spc"></div>

    <div class="hero-image">
        <div class="hero-text">
        <h1>Discover our latest events and more </h1>
        <a href="Pages/Evenement.php" class="button">Go to events</a>
        </div>
    </div> 

  <div class="spc"></div>

    <div class="container-slider">

        <div class="desc">
            <h1 id="ko" style="color:#fff">
                Micro club is divided into sections and departements
            </h1>
            <div class="desca">
                <div class="slidershow">
                    <figure>
                        <img src="Pics/imgs1.png" >
                        <img src="Pics/imgs2.png">
                        <img src="Pics/imgs3.png" >
                        <img src="Pics/imgs4.png" >
                    </figure>
                </div>
                <div class="right-slider">
                    <div class="right-slider2">
                        </br>
                        <h2><i class="fa fa-arrow-left" style="font-size:48px;color:rgb(255, 255, 255)"></i>  Our Sections</h2>
                    </div>
                    <div class="topic">
                        <h2 style="color:white;"><i class="fa fa-caret-right" style="font-size:24px;color:rgb(255, 255, 255)"></i> IT, The biggest in MC</h2></i>
                        <h2 style="color:white;"><i class="fa fa-caret-right" style="font-size:24px;color:rgb(255, 255, 255)"></i> Game Dev</h2></i>
                        <h2 style="color:white;"><i class="fa fa-caret-right" style="font-size:24px;color:rgb(255, 255, 255)"></i> Robotics</h2></i>
                        <h2 style="color:white;"><i class="fa fa-caret-right" style="font-size:24px;color:rgb(255, 255, 255)"></i> Multimedia</h2></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="spc"></div>

        <div class="desc">
            <div class="desca">
                <div class="left-slider">
                    <div class="left-slider2">
                    </br>
                    <h2>Our Departements <i class="fa fa-arrow-right" style="font-size:48px;color:rgb(255, 255, 255)"></i> </h2>
                    </div>
                    <div class="left-sliderK">
                        <h2 style="color:white;"><i class="fa fa-caret-right" style="font-size:24px;color:rgb(255, 255, 255)"></i> Internal Relations</h2></i>
                        <h2 style="color:white;"><i class="fa fa-caret-right" style="font-size:24px;color:rgb(255, 255, 255)"></i> HR</h2></i>
                        <h2 style="color:white;"><i class="fa fa-caret-right" style="font-size:24px;color:rgb(255, 255, 255)"></i> External Relations and Sponsorship</h2></i>
                        <h2 style="color:white;"><i class="fa fa-caret-right" style="font-size:24px;color:rgb(255, 255, 255)"></i> Design</h2></i>
                        <h2 style="color:white;"><i class="fa fa-caret-right" style="font-size:24px;color:rgb(255, 255, 255)"></i> Communication</h2></i>
                    </div>
                </div>
                <div class="slidershowK">
                    <figure>
                        <img src="Pics/img1.png" >
                        <img src="Pics/img2.png">
                        <img src="Pics/img3.png" >
                        <img src="Pics/img4.png" >
                        <img src="Pics/img5.png" >
                    </figure>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="main-content">

            <div class="left box">
                <h2>Find us</h2>
                <div class="spc"></div>
                <div class="content">
                    <h3>We are very actif in social media !</br> You can follow us in our pages</h3>
                    <ul class="social">
                            <li><a href="https://www.facebook.com/Micro.Club.USTHB/" target="blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/micro-club-usthb/" target="blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://www.instagram.com/microclub_usthb/" target="blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://github.com/MicroClub-USTHB" target="blank"><i class="fa fa-github"></i></a></li>   
                    </ul>
                </div>
            </div>

            <div class="center box">
                <h2>Contact Us</h2>
                <div class="spc"></div>
                <div class="content">
                    <div class="email">
                        <i class="fa fa-envelope" style="font-size:24px;color:rgb(255, 255, 255)"></i>
                        <span class="text">Email : <a href="mailto:micro-club@usthb.dz" target="blank">micro-club@usthb.dz</a> </span>
                    </div>
                    <div class="phone">
                        <i class="fa fa-phone" style="font-size:24px;color: rgb(255, 255, 255);"></i>
                        <span class="text">President Phone: <a href="tel:+213 558 52 11 45" target="blank">0558 52 11 45</a> </span>
                    </div>
                    <div class="fax">
                        <i class="fa fa-fax" style="font-size:24px;color:rgb(255, 255, 255)"></i>
                        <span class="text">External Relationship Phone: <a href="tel:+213542 17 01 14" target="blank">0542 17 01 14</a></span>
                    </div>
                    <div class="Location">
                        <i class="fa fa-map-marker" style="font-size:24px;color:rgb(255, 255, 255)"></i>
                        <span class="text">Location : <a href="https://www.google.com/maps?ll=36.720646,3.185523&z=17&t=m&hl=en&gl=GB&mapclient=embed&cid=3141297663324068893" target="blank">Room 148 Department of informatic in the USTHB</a></span>
                    </div>
                </div>
            </div>

            <div class="right box">
                <h2>Feedback</h2>
                <div class="content">
                    <form  name="sending" method=post>
                        <label for="email" name="mail">Email</label>
                        <input type="email" name="mail" required placeholder="Your Email">
                        <label for="message">Message</label>
                        <br>
                        <textarea name="message" cols="40" rows="5" placeholder="Your message"></textarea>
                        <button class="btn" type="submit" >Send</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; Micro Club - coded with sweat and blood.</p>
        </div>
    </footer>

</body>

</html>

