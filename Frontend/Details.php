<?php
 require("include/connection.inc.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <script> src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
       #header{
            background-image: url("images/17.jpg");
            background-size: cover;
            height:100%;
            background-repeat: no-repeat; 
            background-attachment: fixed;
        }
        .nav-link{
    font-size: 18px;
    margin-right:20px;
   }
footer{
    height:13%;
    color: white;
    background: linear-gradient(to bottom, gray, slategray, lightslategray);
    text-align: center;
    padding-top: 25px;
    font-style: bold;
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
          <center> <h1 style="font-size:80px; font-family: Bedrock;">STUDENT HISTORY</h1></center>
    </div>
    </div>
    <div style="background-color: rgb(240, 240, 240); height: 87%; padding:50px;" >
    <div class="container"> 
      <div class="row" >
        <div class="col-12 col-lg-12">
      <form action="" method="post">
      <input type="submit" value="Show Data" name="send" class="btn btn-info">
      </form>
    <?php
                if(isset($_POST['send'])){
                require("include/connection.inc.php");
                $reg= $_SESSION['ADMIN'];
                $result = mysqli_query($connection,"SELECT * FROM studentbooks where Reg_no = '$reg' ");
                
               ?>
               <table cellpadding="5" class="table table-borderless" style="font-size:14pt; margin-top:5px; border:1px solid grey;">
                     <thead  class="thead-dark">
                     <tr>
                      <th>Serial No.</th>
                       <th>Student Name</th>
                       <th>Reg. no.</th>
                       <th>Book Name</th>
                       <th>Domain</th>
                       <th>Status</th>
                       <th>Date</th>
                     </tr>
                    <!-- Data display -->
                    <tbody>
                   <?php
                   $id=1;
                    while($row = mysqli_fetch_assoc($result)){
                      echo "<tr class='table table-light'><td>".$id++."</td><td>".$row['Student']."</td><td>".$row['Reg_no']."</td>";
                      echo "<td>".$row['Book']."</td><td>".$row['Domain']."</td><td>".$row['Status']."</td><td>".$row['Date']."</td>";
                   }
                  }
                   ?>
             </div>
            </div>
      </div>
      </div>
    </div>
    <!-- <footer>
      <b> Copyright © 2022 Sikandar Salam</b>
  </footer> -->
</body>
</html>