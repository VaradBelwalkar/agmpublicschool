
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
     <link rel="stylesheet" href="css/table.css">

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


     <!-- TESTIMONIAL -->
     <section id="testimonial">
<?php
session_start();
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your MySQL username
$password = "temp"; // Replace with your MySQL password
$database = "agmpublicschool"; // Replace with your database name
// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_errno){
echo "Connection Error.";
}
$query = "SELECT * FROM agmpublicschool.general_information;";
$result = mysqli_query($conn, $query);

// Display the table
echo '<div class="row" style="max-width: 100%; padding-left: 20%; padding-right: 20%;">';
echo '<table class="table table-bordered disclosure_data" style="border-width: 0.1cm;">';
echo '<tr class="table-active">';
echo '<td colspan="3"><h4><b>A. GENERAL INFORMATION</b></h4></td>';
echo '</tr>';
echo '<tr class="table-primary">';
echo '<td><b>SL.No.</b></td>';
echo '<td><b>INFORMATION</b></td>';
echo '<td><b>DETAILS</b></td>';
echo '</tr>';

// Iterate through the result set and display each row as a table row
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr class="">';
    echo '<td>' . $row['srno'] . '</td>';
    echo '<td>' . $row['information'] . '</td>';
    echo '<td>' . $row['details'] . '</td>';
    echo '</tr>';
}

// Close the table
echo '</table>';
echo '</div>';

// Close the database connection
mysqli_close($conn);

?>



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

$query = "SELECT * FROM docs";
$result = mysqli_query($conn, $query);

// Display the table
echo '<div class="row" style="max-width: 100%; padding-left: 20%; padding-right: 20%;">';
echo '<table class="table table-bordered disclosure_data" style="border-width: 0.1cm;">';
echo '<tr class="table-active">';
echo '<td colspan="3"><h4><b>B. DOCUMENTS AND INFORMATION</b></h4></td>';
echo '</tr>';
echo '<tr class="table-primary">';
echo '<td><b>SL.No.</b></td>';
echo '<td><b>INFORMATION</b></td>';
echo '<td><b>DOCUMENTS</b></td>';
echo '</tr>';

// Iterate through the result set and display each row as a table row
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr class="">';
    echo '<td>' . $row['srno'] . '</td>';
    echo '<td>' . $row['information'] . '</td>';
    echo '<td><a href="' . $row['docs_path'] . '" class="w3-bar-item w3-button">View</a></td>';
    echo '</tr>';
}

// Close the table
echo '</table>';
echo '</div>';
// Close the database connection
mysqli_close($conn);

?>






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

$query = "SELECT * FROM res_academics";
$result = mysqli_query($conn, $query);

// Display the table
echo '<div class="row" style="max-width: 100%; padding-left: 20%; padding-right: 20%;">';
echo '<table class="table table-bordered disclosure_data" style="border-width: 0.1cm;">';
echo '<tr class="table-active">';
echo '<td colspan="3"><h4><b>C. RESULT AND ACADEMICS</b></h4></td>';
echo '</tr>';
echo '<tr class="table-primary">';
echo '<td><b>SL.No.</b></td>';
echo '<td><b>INFORMATION</b></td>';
echo '<td><b>DOCUMENTS</b></td>';
echo '</tr>';

// Iterate through the result set and display each row as a table row
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr class="">';
    echo '<td>' . $row['srno'] . '</td>';
    echo '<td>' . $row['information'] . '</td>';
    echo '<td><a href="' . $row['document_link'] . '" class="w3-bar-item w3-button">View</a></td>';
    echo '</tr>';
}

// Close the table
echo '</table>';
echo '</div>';
// Close the database connection
mysqli_close($conn);

?>



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

$query = "SELECT * FROM staff";
$result = mysqli_query($conn, $query);

// Display the table
echo '<div class="row" style="max-width: 100%; padding-left: 20%; padding-right: 10%;">';
echo '<table class="table table-bordered disclosure_data" style="border-width: 0.1cm;">';
echo '<tr class="table-active">';
echo '<td colspan="3"><h4><b>D. STAFF (TEACHING)</b></h4></td>';
echo '</tr>';
echo '<tr class="table-primary">';
echo '<td>SL.No.</td>';
echo '<td>INFORMATION</td>';
echo '<td>DETAILS</td>';
echo '</tr>';

// Iterate through the result set and display each row as a table row
while ($row = mysqli_fetch_assoc($result)) {
     $id = $row['srno']; // Assuming you have a unique identifier for each row, replace 'id' with the actual column name
     if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] ==1  ){
     echo '<tr class="" id="row-' . $id . '" onmouseover="showActions(' . $id . ')" onmouseout="hideActions(' . $id . ')">';
     }else{
     echo '<tr class="">';
    }
     echo '<td>' . $row['srno'] . '</td>';
     echo '<td>' . $row['information'] . '</td>';
     echo '<td>' . $row['details'] . '</td>';
     
     if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] ==1  ){
     echo '<td id="actions-' . $id . '" style="display: none;">';
     echo '<button style="background-color: red; color: white; border: none; padding: 5px 10px; border-radius: 4px;" onclick="removeRow(' . $id . ')">Remove</button>';
     echo '<button style="background-color: yellow; color: black; border: none; padding: 5px 10px; border-radius: 4px;" onclick="editRow(' . $id . ')">Edit</button>';
     echo '</td>';
     }
     echo '</tr>';
}

// Close the table
echo '</table>';
echo '</div>';
// Close the database connection
mysqli_close($conn);

?>

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

$query = "SELECT * FROM school_infra";
$result = mysqli_query($conn, $query);

// Display the table
echo '<div class="row" style="max-width: 100%; padding-left: 20%; padding-right: 20%;">';
echo '<table class="table table-bordered disclosure_data">';
echo '<tr class="table-active">';
echo '<td colspan="3"><h4><b>E. SCHOOL INFRASTRUCTURE</b></h4></td>';
echo '</tr>';
echo '<tr class="table-primary">';
echo '<td><b>SL.No.</b></td>';
echo '<td><b>INFORMATION</b></td>';
echo '<td><b>DETAILS</b></td>';
echo '</tr>';

// Iterate through the result set and display each row as a table row
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr class="">';
    echo '<td>' . $row['srno'] . '</td>';
    echo '<td>' . $row['information'] . '</td>';
    echo '<td>' . $row['details'] . '</td>';
    echo '</tr>';
}

// Close the table
echo '</table>';
echo '</div>';
// Close the database connection
mysqli_close($conn);

?>


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
   <?php
  if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] ==1  ){
  echo "<script>
  function showActions(id) {
    document.getElementById('actions-' + id).style='display: block';
  }

  function hideActions(id) {
     document.getElementById('actions-' + id).style='display: none';
  }

  function removeRow(id) {
    if (confirm('Are you sure you want to remove this row?')) {
      // Send an AJAX request to delete the row
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
          // Handle the response
          if (this.responseText === 'success') {
            // Remove the row from the table
            var row = document.getElementById('row-' + id);
            row.parentNode.removeChild(row);
          } else {
            alert('Failed to remove the row.');
          }
        }
      };
      xhttp.open('POST', 'delete_row.php', true); // Replace 'delete_row.php' with the URL to your PHP script handling the delete operation
      xhttp.withCredentials = true;
      xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      xhttp.send('id=' + id); // Pass the ID of the row to delete
    }
  }

  function editRow(id) {
    var newValue = prompt('Enter the updated value:'); // Prompt the user to enter the updated value
    if (newValue !== null) {
      // Send an AJAX request to update the row
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
          // Handle the response
          if (this.responseText === 'success') {
            // Update the value in the table
            var cell = document.querySelector('#row-' + id + ' td:nth-child(3)');
            cell.innerHTML = newValue;
          } else {
            alert('Failed to update the row.');
          }
        }
      };
      xhttp.open('POST', 'update_row.php', true); // Replace 'update_row.php' with the URL to your PHP script handling the update operation
      xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      xhttp.send('id=' + id + '&value=' + encodeURIComponent(newValue)); // Pass the ID of the row and the updated value
    }
  }
</script>";
  }
?>

</body>
</html>