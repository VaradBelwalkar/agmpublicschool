<?php

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your MySQL username
$password = "temp"; // Replace with your MySQL password
$database = "agmpublicschool"; // Replace with your database name
// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_errno){
echo "Connection Error.";
}
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform sanitization on the input
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Prepare a statement with a parameterized query
    $query = "SELECT * FROM auth WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result && mysqli_num_rows($result) > 0) {
        // Authentication successful
        session_start();
        $_SESSION['authenticated'] = true;
        echo $_SESSION['authenticated'];
        header('Location: index.php');
    } else {
        // Authentication failed
        echo "Invalid username or password.";
    }

// Close the connection
$conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>AGM Public School Varur</title>
<!-- 

Known Template 

http://www.templatemo.com/tm-516-known

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="icon" type="image/png" href="images/fav/favicon.png">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/login.css">
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation" style="font-size: large;">
          <div class="container" style="width: 100%">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>
                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">AGM Public School</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="about.php" class="smoothScroll">About Us</a></li>
                         <li><a href="gallery.php" class="smoothScroll">Gallary</a></li>
                         <li><a href="features.php" class="smoothScroll">Features</a></li>
                         <li><a href="discosure.php" class="smoothScroll">Mandatory Discosure</a></li>
                         <li><a href="contact.php" class="smoothScroll">Contact Us</a></li>
                         <li><a href="login.php" class="smoothScroll">Admin Login</a></li>
                    </ul>
               </div>

          </div>
     </section>

     <section id="login">
     <div class="login-container" style="max-width: 800px;">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <div class="login-form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="login-form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="login-form-group">
                <input type="submit" value="Login">
            </div>
            <div class="login-form-group text-center">
                Don't have an account? <a href="#" class="register-link">Register</a>
            </div>
        </form>
    </div>
     </section>

     <!-- CONTACT -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="section-title">
                                   <h2>Contact us <small>we love conversations. let us talk!</small></h2>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Enter full name" name="name" required="">
                    
                                   <input type="email" class="form-control" placeholder="Enter mobile number" name="email" required="">

                                   <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required=""></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="send message" value="Send Message">
                              </div>

                         </form>
                    </div>

               </div>
          </div>
     </section>       


     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Location</h2>
                              </div>
                              <address>
                                   <p>
                                   DIGAMMBAR JAIN MATH,<br>
                                   NAVAGAHTEERTH KSHETRA VARUR,<br>
                                   CITY HUBLI DIST DHARWAD,<br>
                                   DHARWAD , KARNATAKA - 581207

                                   </p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>+91 9844093177</p>
                                   <p><a href="mailto:youremail.com">agmpublicschool1@gmail.com</a></p>
                              </address>

                              <div class="footer_menu">
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div>
                                   <p>Designed & Developed by <i>V-Tech Solutions Private Limited </p>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>