<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script> src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #header{
            background-image: url("images/16.jpg");
            background-size: cover;
            height:100%;
            background-repeat: no-repeat; 
            background-attachment: fixed;
        }
   input{
    border:0px ;
   }
   textarea{
    border: 0px;
   }
   footer{
    height:80px;
    color: white;
    background: linear-gradient(to bottom, gray, slategray, lightslategray);
    text-align: center;
    padding-top: 25px;
    font-style: bold;
   }
   .nav-link{
    font-size: 18px;
    margin-right:20px;
   }
   i{
    margin:10px;
   }

   /* Media Queries for small screen */
@media only screen and (max-width: 786px) {
input[type="text"],
input[type="email"] {
    max-width: 100%;
}
textarea {
  max-width: 100%;
  height: 100px;
}
footer{
 margin-top: 450px;
}
}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="home.php">
          <img src="images/book.png" style="height:60px; width:60px;" alt=""> E-Library</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item" > 
                <form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                <input type="submit" name="go" class="btn btn-info" value="GO">
            </div>
                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search">
           </div>
              </form></li>
          <li class="nav-item" style="margin-left: 15em;">
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="Details.php">View Details </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Books.php">View Books</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Contact-Us.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <form action="logout.php">
                <input type="submit" value="Logout" name="logout" class="btn btn-danger">
              </form>
            </li>
          </ul>
        </div>
        </div>
      </nav>
    <div id="header">
    
      <div style=" background-color: rgba(0,0,0,0.4) !important; height:100%; color: white; padding-top: 300px; ">
          <center> <h1 style="font-size:80px; font-family: Bedrock;">CONTACT US</h1></center>
    </div>
    </div>
    <div style="background-color: rgb(240, 240, 240); height: 87%; padding:50px;" >
    <div class="container"> 
    <div class="row">  
      <div class="col-12 col-md-7 col-lg-7">
        <h1>WE'RE HERE TO ASSIST YOU</h1><br><br><br>
        <form action="" method="post">
        <input type="text" name="username" placeholder="  Your Name" style="width:570px; height:45px;"><br><br>
        <input type="text" name="email" placeholder="  Email Address" style="width:570px; height:45px;"><br><br>
        <textarea name="mesaage" id="" cols="75" rows="5" placeholder="  Message"></textarea><br><br>
        <input type="submit" value="SEND MESSAGE" name="send" class="btn btn-primary" style="border-radius:20px;">
      </form>
      </div>
      <div class="col-12 col-md-5 col-lg-5" >
          <h1>CONTACT INFO</h1><br>
          <h5>Address</h5>
          <p>XYZ, Mardan, KPK, Pakistan</p>
          <h5>Email Us</h5>
          <p>contact@gmail.com</p>
          <h5>Call Us</h5>
          <p>0300-1234567</p>
          <h5>Follow Us</h5>
          <a href=""><i class="fa fa-facebook-f" style="font-size:36px;"></i></a> 
          <a href=""><i class="fa fa-instagram" style="font-size:36px"></i></a>
          <a href=""><i class="fa fa-youtube-play" style="font-size:36px;color:red"></i></a>
      </div>
      </div>
      </div>
    </div>
    <footer>
      <b> Copyright © 2022 Sikandar Salam</b>
  </footer>
</body>
</html>