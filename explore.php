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
        <link href="css/style.css" rel="stylesheet">
    </head>
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
                        <a href="index.php" class="nav-item nav-link ">Home</a>
                        <a href="feature.php" class="nav-item nav-link">Feature</a>
                        <a href="menu.php" class="nav-item nav-link">Menu</a>
                        <a href="booking.php" class="nav-item nav-link">Booking</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <a href="explore.php" class="nav-item nav-link active">Explore More</a>
                         <?php 
      if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
      {
        echo"
          <div class='user'>
            <a class='nav-item nav-link'href='logout.php'>$_SESSION[username]-LOGOUT</a>
          </div>
        ";
      }
      else
      {
        echo"
           <a href='mainlogin.php' class='nav-item nav-link'>Login/Registration</a>
        ";

      }
    
    ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Food Blog</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                        <a href="explore.php">Explore more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p><b>Food Blog</b></p>
                    <h2>Latest From Food Blog</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/e1s.jpg" alt="Blog">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">Soup</h2>
                                <div class="blog-text">
                                    <p>
                                        The goodness of homemade soup. The flavors to die for and Creamy enough for your taste  buds with The right amount of greens.
                                    </p>
                                    <a class="btn custom-btn" href="menu.php">View Menu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/e1ics.jpg" alt="Blog">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">Ice-Cream Scoop</h2>
                                <div class="blog-text">
                                    <p>
                                        Ice-cream is exquisite. What a pity it isn't illegal. So enjoy it before it melts.A little lick of frozen cream every now and then, goes a long, long way.
                                    </p>
                                    <a class="btn custom-btn" href="menu.php">View Menu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/e1i.jpg" alt="Blog">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">Ice cream shakes</h2>
                                <div class="blog-text">
                                    <p>
                                        The best ice cream in the country.A taste of heaven on earth.The Freshest Ice Cream on Earth.It’s way beyond ice cream.Finest Ice Creams and Sorbets.
                                    </p>
                                    <a class="btn custom-btn" href="menu.php">View Menu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/e1eic.jpg" alt="Blog">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">Exotic ice creams</h2>
                                <div class="blog-text">
                                    <p>
                                        Think chocolate, think chilled, think Galaxy ice cream.Crazy Good Ice Cream. Finest Ice Creams and Sorbets.Real ingredients. Real ice cream. Real smiles.
                                    </p>
                                    <a class="btn custom-btn" href="menu.php">View Menu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="explore3.php">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="explore.php">1</a></li>
                            <li class="page-item"><a class="page-link" href="explore2.php">2</a></li>
                            <li class="page-item"><a class="page-link" href="explore3.php">3</a></li>
                            <li class="page-item"><a class="page-link" href="explore2.php">Next</a></li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
        <div class="title">
        <h2>Comments</h2></div>
      <center>  <table>
  <tr>
    <th>Name</th>
    <th>Comment</th>
  </tr>
</table></center>
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM reviews";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  " <center><table> <tr>
    <td>" . $row["name"]. "</td>
    
  <td>" . $row["message"]. " </td></tr></table></center>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

        <div class="single">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">         
                        <div class="comment-form">
                            <h2>Leave a comment</h2>
                            <form action ="comment.php" method="post">
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name" name="name"pattern="[A-Za-z ]*{20}" title="Only alphabets and white space are allowed">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" id="website" name="website">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message *</label>
                                    <textarea id="message" cols="30" rows="5" class="form-control" name="message"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn custom-btn">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <!-- Blog End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Our Address</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>9, DDA Market 1, IP Extn., New Delhi</p>
                                    <p><i class="fa fa-phone-alt"></i>+911122231074</p>
                                    <p><i class="fa fa-envelope"></i>cafemeadows@gmail.com</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Quick Links</h2>
                                    <a href="feature.php">Feature</a>
                                    <a href="menu.php">Menu</a>
                                    <a href="booking.php">Bookings</a>
                                    <a href="contact.php">Contact Us</a>
                                    <a href="explore.php">Explore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <div class="footer-link">
                            <h2>Opening Hours</h2>
                                    <a href="">Monday  -Friday</a>
                                    <a href="">9:00am- 10:30pm</a>
                                    <a href="">Saturday & Sunday</a>
                                    <a href="">9:00am- 11:00pm</a>
                        </div></div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Copyright &copy; <a href="#">Cafe Meadows 2021.</a> All Rights Reserved.</p>
                    </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
