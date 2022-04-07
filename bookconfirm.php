 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Cafe Meadows</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- Favicon -->
        <link href="img/logo.jpeg" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet" >
    <style>
table {
  width: 80%;
}

th {
  text-align: left;
  padding:20px;
  width:50%;

}
td{
    padding-right: 10px;
    padding-left: 20px;
    padding-top: 10px;
    padding-bottom: 10px;
    width:50%;
}
th {
  background-color: #000099;
  color: white;
}
.title{
    padding-left: 140px;
}

</style>
    </head>

    <body>
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">Cafe <span>Meadows</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="feature.php" class="nav-item nav-link">Feature</a>
                        <a href="menu.php" class="nav-item nav-link">Menu</a>
                        <a href="booking.php" class="nav-item nav-link">Booking</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <a href="explore.php" class="nav-item nav-link">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12" style="color: white;">
                        <h2>Your booking is confirmed!</h2>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
         <?php
     
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafe";
$mobile1=$_SESSION['mobile'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM book where mobile='$mobile1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  " <center><table></tr>
    <th>CATEGORIES</th><th>INFORMATION</th></tr> <tr>
    <td> Booking Id </td><td>" . $row["booking_id"]. "</td>
    
  </tr> <tr>
    <td> Name </td><td>" . $row["name"]. "</td>
    
  </tr> <tr>
    <td> Email </td><td>" . $row["email"]. "</td>
    
  </tr>  <tr>
    <td> Mobile </td><td>" . $row["mobile"]. "</td>
    
  </tr><tr>
    <td> Date </td><td>" . $row["date"]. "</td>
    
  </tr> <tr>
    <td> Time</td><td>" . $row["time"]. "</td>
    
  </tr> <tr>
    <td> Guest </td><td>" . $row["guest"]. "</td>
    
  </tr></table></center>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<div>
    <center>
    
              <button onclick="window.print();" class="btn custom-btn" >Download</button></CENTER> 
                        </div>
         
       
    </body>
</html>
