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
                    <a href="index.php" class="navbar-brand">AGM Public School</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="index.php" class="smoothScroll">Home</a></li>
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



     <!-- CONTACT -->
     <section id="contact" style="background-color: cornsilk">
        <div style="text-align: center;">
        <h1 style="color: green;">AGM Public School</h1><br>
        </div>
        <div style="text-align: center;">
            <div style="color: green;display: inline-block;  max-width:400px; vertical-align: top;"><p style=" font-size: 20px; color: green;">Location :</p><p style= "color: green;"><b>
            <?php

$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your MySQL username
$password = "temp"; // Replace with your MySQL password
$database = "agmpublicschool"; // Replace with your database name
// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_errno){
echo "Connection Error.";
}

$query = "SELECT s2 FROM metainfo WHERE  s1='location'";
$result = mysqli_query($conn, $query); 

// Fetch the result row
$row = mysqli_fetch_assoc($result);

// Display a specific column from the result
echo $row['s2'];
     

mysqli_close($conn);

?>
            </b></p></div>
            <div style="color: green;display: inline-block; vertical-align: top; padding-left: 10%; padding-right: 10%;"><span  style="font-size: 20px;">You can contact us at :</span><br><b>
            <?php

$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your MySQL username
$password = "temp"; // Replace with your MySQL password
$database = "agmpublicschool"; // Replace with your database name
// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_errno){
echo "Connection Error.";
}

$query = "SELECT s2 FROM metainfo WHERE  s1='phone'";
$result = mysqli_query($conn, $query); 

// Fetch the result row
$row = mysqli_fetch_assoc($result);

// Display a specific column from the result
echo $row['s2'];
     

mysqli_close($conn);

?>
            </b></div>
            <div style="color: green;display: inline-block; vertical-align: top; padding-right: 10%;"><span  style="font-size: 20px;">You can email us at :</span><br><b>
            <?php

$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your MySQL username
$password = "temp"; // Replace with your MySQL password
$database = "agmpublicschool"; // Replace with your database name
// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_errno){
echo "Connection Error.";
}

$query = "SELECT s2 FROM metainfo WHERE  s1='email'";
$result = mysqli_query($conn, $query); 

// Fetch the result row
$row = mysqli_fetch_assoc($result);

// Display a specific column from the result
echo $row['s2'];
     
 
mysqli_close($conn);

?>
            </b></div>
        </div>

          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="section-title">
                                <br>
                                   <h2 style="color: green;">Send a message</h2>
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