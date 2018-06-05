<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Johns Hopkins University</title>
    <link href='http://fonts.googleapis.com/css?family=Cutive' rel='stylesheet' type='text/css'>
    <!--Font for footer-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="index_style.css?version=51">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    
</head>
<body>
    <header>
    <div class="logo">
            <a href="index.php"><img src="../img/university_logo_small_vertical_blue.png" alt=""></a>
    </div>

        <nav>
            <ul>
                <li><a href="index.php">University<br/><small>Go Home</small></a></li>
                <li><a href="../html pages/about.html">About<br/><small>Meet Us</small></a></li>
                <li><a href="../html pages/admissions.html">Admissions<br/><small>Admissions</small></a></li>
                <li><a href="../html pages/life.html">Students<br/><small>Student Life</small></a></li>
                <li><a href="../html pages/contact.html">Contact<br/><small>Email Us</small></a></li>
            </ul>
        </nav>
    </header>
    <!-- notification message -->
 <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

           <!-- logged in user information -->
<div class="welcome">
    <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

    <div class="head-info">
        <h1>We’re America’s first research university.</h1>
        <br>
        <br>
        <a href="https://www.jhu.edu/" class="btn btn-red">Learn more!</a>
        <div class="added_buttons">
            <a href="login.php" class="btn btn-sign-in">Sign in</a>
            <a href="register.php" class="btn btn-sign-up">Sign up</a>
        </div>
    </div>
    <div class="description">
        <div class="d50">
            <h2 class="headline-2">A Few Words About the University</h2>
            <h5 class="blue-text">Johns Hopkins was founded on the principle that by pursuing big ideas and sharing what we learn, we make the world a better place. For more than 140 years, we haven’t strayed from that vision. Johns Hopkins is made up of nine academic divisions plus the Applied Physics Laboratory. Our faculty and students study, teach, and learn in and across more than 260 programs regularly recognized as being among the nation's best.</h5>
        </div>
        <div class="d50">
            <img src="../img/university_logo_small_vertical_blue.png" alt="Logo">
        </div>    
    </div>
        
    <div class="photo-block">
        <div class="photo-block-mp"><img src="../img/1.jpg" alt=""></div>
        <div class="photo-block-mp"><img src="../img/2.jpg" alt=""></div>
        <div class="photo-block-mp"><img src="../img/3.jpg" alt=""></div>
        <div class="photo-block-mp"><img src="../img/4.jpg" alt=""></div>
    </div>
 <footer>
        <div class="logo-footer">
            <img src="../img/university_logo_small_vertical_blue.png" alt="Logo">
        </div>
        <div>
            <h4 class="footer-header">Contact us</h4>
            <ul class="footer-contacts">
                <li><img src="https://asercoimagen.com/wp-content/uploads/2017/09/88e50689fa3280c748d000aaf0bad480-correo-electr-nico-icono-redondo-1-by-vexels.png" alt="Email">gotojhu@jhu.edu</li>
                <li><img src="http://www.muavere.com/wp-content/uploads/chung/RedPhone2.png" alt="Phone">410-516-8000</li>
                <li><img src="https://cdn2.iconfinder.com/data/icons/color-svg-vector-icons-2/512/map_marker_base-512.png" alt="Location"> Baltimore, Maryland</li>
            </ul>
            <ul class="footer-social">
                <li><a href="https://www.facebook.com/johnshopkinsuniversity/" target="_facebook"><img src="https://stickeroid.com/uploads/pic/full-freeicon/9afd033b022bdfd1c753dd2ee218bc3766307f0b.png" alt="Facebook"></a></li>
                <li><a href="https://plus.google.com/+HopkinsmedicineOrg" target="_google+"><img src="https://www.shareicon.net/download/2016/08/01/640425_media.svg" alt="google+"></a></li>
                <li><a href="https://twitter.com/JohnsHopkins" target="_twiiter"><img src="http://pngimg.com/uploads/twitter/twitter_PNG28.png" alt="Twitter"></a></li>
            </ul>
        </div>
     </footer>
</body>
</html>